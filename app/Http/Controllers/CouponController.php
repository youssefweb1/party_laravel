<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Apply a coupon to the cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function apply(Request $request)
    {
        $request->validate([
            'voucher' => 'required|string|max:191',
        ]);

        $user_id = auth()->id();
        $cartItemsCount = CartItem::where('user_id', $user_id)->count();

        // If the cart is empty, remove any existing discount and return an error message
        if ($cartItemsCount === 0) {
            $request->session()->forget('discount');
            return redirect()->back()->with('error', 'Your cart is empty. Please add items to your cart before applying a coupon.');
        }

        $coupon = Coupon::where('code', $request->input('voucher'))
                        ->where('status', 'active')
                        ->first();

        if (!$coupon) {
            return redirect()->back()->with('error', 'Invalid or inactive promo code.');
        }

        $discount = $this->calculateDiscount($coupon);

        // Store the discount in session to use in the CartController
        $request->session()->put('discount', $discount);

        return redirect()->back()->with('success', 'Promo code applied successfully!');
    }

    /**
     * Calculate the discount amount based on the coupon type and cart subtotal.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return float
     */
    private function calculateDiscount($coupon)
    {
        $subtotal = $this->getCartSubtotal();

        if ($coupon->type == 'percent') {
            $discount = $subtotal * ($coupon->value / 100);
        } else { // 'fixed'
            $discount = min($coupon->value, $subtotal);
        }

        // Ensure the discount doesn't exceed the subtotal
        return min($discount, $subtotal);
    }

    /**
     * Get the cart subtotal for the current user.
     *
     * @return float
     */
    private function getCartSubtotal()
    {
        return CartItem::where('user_id', auth()->id())
            ->get()
            ->reduce(function($carry, $item) {
                return $carry + ($item->price * $item->quantity);
            }, 0);
    }
}