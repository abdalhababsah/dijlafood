<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $fillable = [
        'name_en', 
        'name_ar', 
        'img_path'
    ];

    public function subcategories()
    {
    return $this->hasMany(Subcategory::class);
    }

    public function getNameAttribute()
    {
        $locale = app()->getLocale();
        return $locale === 'ar' ? $this->name_ar : $this->name_en;
    }
}
