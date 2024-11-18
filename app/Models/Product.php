<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name_en', 
        'name_ar', 
        'description_en', 
        'description_ar', 
        'img_path', 
        'subcategory_id'
    ];
    public function subcategory()
    {
    return $this->belongsTo(Subcategory::class);
    }
}
