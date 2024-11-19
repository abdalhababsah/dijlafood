<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Subcategory;

class AdminProductsController extends Controller
{
    public function index()
    {
        // Fetch products with their subcategories and paginate them
        $products = Product::with('subcategory')->paginate(10); // Adjust the number (10) to your desired items per page
    
        // Fetch all subcategories
        $subcategories = Subcategory::all();
    
        // Pass both products and subcategories to the view
        return view('backend.products.index', compact('products', 'subcategories'));
    }
    

    public function create()
    {
        $subcategories = Subcategory::all();
        return view('backend.products.create', compact('subcategories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'img_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'subcategory_id' => 'required|exists:subcategories,id',
        ]);

        if ($request->hasFile('img_path')) {
            $validated['img_path'] = $request->file('img_path')->store('products', 'public');
        }

        Product::create($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $subcategories = Subcategory::all();
        return view('backend.products.edit', compact('product', 'subcategories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'img_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'subcategory_id' => 'required|exists:subcategories,id',
        ]);

        if ($request->hasFile('img_path')) {
            $validated['img_path'] = $request->file('img_path')->store('products', 'public');
        }

        $product->update($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}