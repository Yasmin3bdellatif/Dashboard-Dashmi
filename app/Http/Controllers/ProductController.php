<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Auth::user()->role == 'admin' ? Product::with('category')->get() : Product::where('user_id', Auth::id())->with('category')->get();
        return view('dashboard.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::where('is_active', true)->get();
        return view('dashboard.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = new Product($request->all());
        $product->user_id = Auth::id();

        if ($request->hasFile('photo')) {
            $product->photo = $request->photo->store('photos', 'public');
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    public function edit(Product $product)
    {
        $categories = Category::where('is_active', true)->get();
        if (Auth::user()->role !== 'admin' && Auth::id() !== $product->user_id) {
            return redirect()->route('products.index')->with('error', 'Unauthorized');
        }
        return view('dashboard.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        if (Auth::user()->role !== 'admin' && Auth::id() !== $product->user_id) {
            return redirect()->route('products.index')->with('error', 'Unauthorized');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product->fill($request->all());

        if ($request->hasFile('photo')) {
            $product->photo = $request->photo->store('photos', 'public');
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        if (Auth::user()->role !== 'admin' && Auth::id() !== $product->user_id) {
            return redirect()->route('products.index')->with('error', 'Unauthorized');
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
