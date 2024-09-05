<?php

namespace App\Http\Controllers;

use App\Models\ProductReview;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    /**
     * Store a newly created product review in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'rate' => 'required|integer|between:1,5',
            'review' => 'required|string|max:1000',
        ]);

        $validatedData['user_id'] = auth()->id();
        $validatedData['status'] = 'active';

        ProductReview::create($validatedData);

        return redirect()->back()->with('success', 'Review added successfully.');
    }

    /**
     * Display the specified product's reviews.
     *
     * @param  int  $productId
     * @return \Illuminate\View\View
     */
    public function showReviews($productId)
    {
        $initialReviewCount = 2;

        $reviews = ProductReview::where('product_id', $productId)
            ->with('user')
            ->latest()
            ->get();

        $initialReviews = $reviews->take($initialReviewCount);
        $moreReviews = $reviews->slice($initialReviewCount);

        return view('product.reviews', [
            'initialReviews' => $initialReviews,
            'moreReviews' => $moreReviews,
            'initialReviewCount' => $initialReviewCount,
        ]);
    }
}