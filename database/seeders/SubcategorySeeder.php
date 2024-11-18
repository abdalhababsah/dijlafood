<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories = [
            // Burgers
            ['name_en' => 'Beef Burgers', 'name_ar' => 'برجر لحم', 'category_id' => 1],
            ['name_en' => 'Chicken Burgers', 'name_ar' => 'برجر دجاج', 'category_id' => 1],

            // Premium Products
            ['name_en' => 'Luxury Desserts', 'name_ar' => 'حلويات فاخرة', 'category_id' => 2],
            ['name_en' => 'Exclusive Snacks', 'name_ar' => 'وجبات خفيفة حصرية', 'category_id' => 2],

            // Spring Rolls
            ['name_en' => 'Vegetarian Rolls', 'name_ar' => 'سبرينغ رولز نباتية', 'category_id' => 3],
            ['name_en' => 'Chicken Rolls', 'name_ar' => 'سبرينغ رولز دجاج', 'category_id' => 3],

            // Indian Food
            ['name_en' => 'Curries', 'name_ar' => 'الكاري', 'category_id' => 4],
            ['name_en' => 'Biryani', 'name_ar' => 'برياني', 'category_id' => 4],

            // Sambosas
            ['name_en' => 'Vegetable Sambosas', 'name_ar' => 'سمبوسة خضار', 'category_id' => 5],
            ['name_en' => 'Meat Sambosas', 'name_ar' => 'سمبوسة لحم', 'category_id' => 5],

            // Kabab
            ['name_en' => 'Lamb Kabab', 'name_ar' => 'كباب لحم', 'category_id' => 6],
            ['name_en' => 'Chicken Kabab', 'name_ar' => 'كباب دجاج', 'category_id' => 6],

            // Chicken
            ['name_en' => 'Grilled Chicken', 'name_ar' => 'دجاج مشوي', 'category_id' => 7],
            ['name_en' => 'Fried Chicken', 'name_ar' => 'دجاج مقلي', 'category_id' => 7],
        ];

        DB::table('subcategories')->insert($subcategories);
    }
}