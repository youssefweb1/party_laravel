<?php

namespace App\Http\Controllers;

use App\Models\ProductReview;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display all products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Display details of a specific product.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $product = Product::with('brand')->findOrFail($id);
        $similarProducts = Product::where('brand_id', $product->brand_id)
            ->where('id', '!=', $id)
            ->take(4)
            ->get();
        
        $discountedPrice = $this->calculateDiscountedPrice($product);

        $initialReviewCount = 2;
        $reviews = $this->getProductReviews($id, $initialReviewCount);

        return view('products.show', compact(
            'product',
            'similarProducts',
            'discountedPrice',
            'reviews',
            'initialReviewCount'
        ));
    }

    /**
     * Store a new product.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $this->validateProductData($request);

        if ($request->hasFile('photo')) {
            $validatedData['photo'] = $this->storeProductImage($request->file('photo'));
        }

        Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    /**
     * Update an existing product.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $validatedData = $this->validateProductData($request, $id);

        if ($request->hasFile('photo')) {
            $this->deleteOldProductImage($product);
            $validatedData['photo'] = $this->storeProductImage($request->file('photo'));
        }

        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Delete a product.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $this->deleteOldProductImage($product);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

    /**
     * Calculate the discounted price for a product.
     *
     * @param Product $product
     * @return float
     */
    private function calculateDiscountedPrice(Product $product): float
    {
        return $product->discount > 0
            ? $product->price - ($product->price * ($product->discount / 100))
            : $product->price;
    }

    /**
     * Get product reviews.
     *
     * @param int $productId
     * @param int $initialCount
     * @return array
     */
    private function getProductReviews(int $productId, int $initialCount): array
    {
        $reviews = ProductReview::where('product_id', $productId)
            ->with('user')
            ->latest()
            ->get();

        return [
            'initialReviews' => $reviews->take($initialCount),
            'moreReviews' => $reviews->slice($initialCount),
        ];
    }

    /**
     * Validate product data.
     *
     * @param Request $request
     * @param int|null $id
     * @return array
     */
    private function validateProductData(Request $request, ?int $id = null): array
    {
        $rules = [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:products,slug' . ($id ? ',' . $id : ''),
            'summary' => 'required',
            'description' => 'required',
            'photo' => 'sometimes|file|image|max:2048',
            'stock' => 'required|integer',
            'currency_id' => 'required|integer',
            'price' => 'required|numeric',
            'brand_id' => 'required|exists:brands,id',
        ];

        return $request->validate($rules);
    }

    /**
     * Store product image.
     *
     * @param \Illuminate\Http\UploadedFile $file
     * @return string
     */
    private function storeProductImage($file): string
    {
        return $file->store('product_images', 'public');
    }

    /**
     * Delete old product image.
     *
     * @param Product $product
     * @return void
     */
    private function deleteOldProductImage(Product $product): void
    {
        if ($product->photo) {
            Storage::disk('public')->delete($product->photo);
        }
    }
}
