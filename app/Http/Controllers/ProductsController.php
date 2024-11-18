<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
class ProductsController
{
    public function getProductsWithSubcategories($categoryID)
    {
        $locale = app()->getLocale();
    
        $categories = Category::with(['subcategories' => function ($query) use ($locale) {
            $query->select([
                'id',
                'name_' . $locale . ' as name', 
                'category_id'
            ])->with(['products' => function ($query) use ($locale) {
                $query->select([
                    'id',
                    'name_' . $locale . ' as name', 
                    'description_' . $locale . ' as description', 
                    'img_path',
                    'subcategory_id'
                ]);
            }]);
        }])->where('id', $categoryID)
            ->select(['id', 'name_' . $locale . ' as name']) 
            ->get();
    
        return view('pages.ViewCategories', compact('categories'));
    }




    public function show($productId)
    {
        $locale = app()->getLocale();
        $product = Product::select([
                'id',
                'name_' . $locale . ' as name',
                'description_' . $locale . ' as description',
                'img_path',
                'subcategory_id'
            ])
            ->with(['subcategory' => function ($query) use ($locale) {
                $query->select([
                    'id',
                    'name_' . $locale . ' as name'
                ]);
            }])
            ->findOrFail($productId);
        return view('', compact('product'));
    }
    
}
