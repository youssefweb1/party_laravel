<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;

class WishlistController extends Controller
{
    /**
     * Add a product to the wishlist.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $user_id = auth()->id();
        $product_id = $request->input('product_id');

        $product = Product::findOrFail($product_id);

        $existingWishlistItem = Wishlist::where('product_id', $product_id)
                                        ->where('user_id', $user_id)
                                        ->first();

        if ($existingWishlistItem) {
            return redirect()->back()->with('info', 'Product already in wishlist.');
        }

        Wishlist::create([
            'product_id' => $product_id,
            'user_id' => $user_id,
            'price' => $product->price
        ]);

        return redirect()->back()->with('success', 'Product added to wishlist.');
    }

    /**
     * Remove a product from the wishlist.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $wishlistItem = Wishlist::findOrFail($id);
        $wishlistItem->delete();

        return redirect()->back()->with('success', 'Item removed from wishlist.');
    }

    /**
     * Toggle a product in the wishlist.
     *
     * @param  int  $productId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function toggle($productId)
    {
        $user = auth()->user();
        $product = Product::findOrFail($productId);

        $wishlist = Wishlist::where('user_id', $user->id)
                            ->where('product_id', $product->id)
                            ->first();

        if ($wishlist) {
            $wishlist->delete();
            $message = 'Product removed from wishlist.';
        } else {
            Wishlist::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'price' => $product->price
            ]);
            $message = 'Product added to wishlist.';
        }

        return redirect()->back()->with('success', $message);
    }
}