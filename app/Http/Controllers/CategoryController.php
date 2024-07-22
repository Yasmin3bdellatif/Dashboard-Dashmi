<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Gate; // Ensure you have this line

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage-categories'); // Ensure middleware is added for authorization
    }

    public function index()
    {
        $categories = Category::all();
        return view('dashboard.categories.index', [
            "categories" => $categories,
        ]);
    }

    public function create()
    {
        // Ensure user has the right to create categories
        $this->authorize('create', Category::class);

        return view('dashboard.categories.create');
    }

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'categoryName' => 'required|string|max:255',
            'details' => 'required|string',
        ]);

        // Ensure user has the right to create categories
        $this->authorize('create', Category::class);

        // Store the category
        $category = new Category;
        $category->categoryName = $request->categoryName;
        $category->details = $request->details;
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category created successfully!');
    }
    
    public function edit(Category $category)
    {
        // Ensure user has the right to edit categories
        $this->authorize('update', $category);

        return view('dashboard.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        // Validate request
        $request->validate([
            'categoryName' => 'required|string|max:255',
            'details' => 'required|string',
        ]);

        // Ensure user has the right to update categories
        $this->authorize('update', $category);

        // Update the category
        $category->categoryName = $request->categoryName;
        $category->details = $request->details;
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    public function destroy(Category $category)
    {
        // Ensure user has the right to delete categories
        $this->authorize('delete', $category);

        // Delete the category
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}
