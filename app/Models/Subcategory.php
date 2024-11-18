<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'name_en', 
        'name_ar', 
        'img_path', 
        'category_id'
    ];
    public function category()
    {
    return $this->belongsTo(Category::class);
    }

    public function products()
    {
    return $this->hasMany(Product::class);
    }
}
