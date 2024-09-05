<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $parentCategories = Category::where('is_parent', 1)->get();
        return view('categories.create', compact('parentCategories'));
    }

    /**
     * Store a newly created category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:categories',
            'status' => 'required|in:active,inactive',
        ]);

        Category::create($validatedData);

        return redirect()->route('categories.index')
            ->with('success', 'Category added successfully');
    }

    /**
     * Show the form for editing the specified category.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\View\View
     */
    public function edit(Category $category)
    {
        $parentCategories = Category::where('is_parent', 1)->get();
        return view('categories.edit', compact('category', 'parentCategories'));
    }

    /**
     * Update the specified category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:categories,slug,' . $category->id,
            'status' => 'required|in:active,inactive',
        ]);

        $category->update($validatedData);

        return redirect()->route('categories.index')
            ->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified category from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')
            ->with('success', 'Category deleted successfully');
    }
}