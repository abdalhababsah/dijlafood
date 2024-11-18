<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('subcategories')->get();
        return view('backend.categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'img_path' => 'nullable|image',
        ]);
    
        $data = $request->only('name_en', 'name_ar');
    
        if ($request->hasFile('img_path')) {
            $data['img_path'] = $request->file('img_path')->store('categories', 'public');
        }
    
        Category::create($data);
    
        return redirect()->back()->with('success', 'Category created successfully.');
    }

    public function addSubcategory(Request $request, $categoryId)
{
    $request->validate([
        'name_en' => 'required|string|max:255',
        'name_ar' => 'required|string|max:255',
    ]);

    $category = Category::findOrFail($categoryId);
    $category->subcategories()->create($request->only('name_en', 'name_ar'));

    return redirect()->back()->with('success', 'Subcategory added successfully.');
}

public function updateSubcategory(Request $request, $subcategoryId)
{
    $request->validate([
        'name_en' => 'required|string|max:255',
        'name_ar' => 'required|string|max:255',
    ]);

    $subcategory = Subcategory::findOrFail($subcategoryId);
    $subcategory->update($request->only('name_en', 'name_ar'));

    return redirect()->back()->with('success', 'Subcategory updated successfully.');
}
public function update(Request $request, $categoryId)
{
    $request->validate([
        'name_en' => 'required|string|max:255',
        'name_ar' => 'required|string|max:255',
        'img_path' => 'nullable|image',
    ]);

    $category = Category::findOrFail($categoryId);

    $data = $request->only('name_en', 'name_ar');

    if ($request->hasFile('img_path')) {
        // Delete the old image if exists
        if ($category->img_path) {
            \Storage::delete('public/' . $category->img_path);
        }

        // Store the new image
        $data['img_path'] = $request->file('img_path')->store('categories', 'public');
    }

    $category->update($data);

    return redirect()->back()->with('success', 'Category updated successfully.');
}
public function destroy($id)
{
    $category = Category::findOrFail($id);

    // Delete all subcategories associated with the category
    $category->subcategories()->delete();

    // Delete the category
    $category->delete();

    return redirect()->back()->with('success', 'Category and its subcategories deleted successfully.');
}

}
