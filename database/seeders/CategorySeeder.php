<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name_en' => 'Burgers',
                'name_ar' => 'برجر',
                'img_path' => 'images/categories/burgers.jpg',
            ],
            [
                'name_en' => 'Premium Products',
                'name_ar' => 'منتجات مميزة',
                'img_path' => 'images/categories/premium_products.jpg',
            ],
            [
                'name_en' => 'Spring Rolls',
                'name_ar' => 'سبرينغ رولز',
                'img_path' => 'images/categories/spring_rolls.jpg',
            ],
            [
                'name_en' => 'Indian Food',
                'name_ar' => 'طعام هندي',
                'img_path' => 'images/categories/indian_food.jpg',
            ],
            [
                'name_en' => 'Sambosas',
                'name_ar' => 'سمبوسة',
                'img_path' => 'images/categories/sambosas.jpg',
            ],
            [
                'name_en' => 'Kabab',
                'name_ar' => 'كباب',
                'img_path' => 'images/categories/kabab.jpg',
            ],
            [
                'name_en' => 'Chicken',
                'name_ar' => 'دجاج',
                'img_path' => 'images/categories/chicken.jpg',
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
