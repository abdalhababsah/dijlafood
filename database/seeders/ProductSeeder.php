<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Beef Burgers
            [
                'name_en' => 'Classic Beef Burger',
                'name_ar' => 'برجر لحم كلاسيكي',
                'description_en' => 'A classic beef burger with fresh lettuce and tomato.',
                'description_ar' => 'برجر لحم كلاسيكي مع خس وطماطم طازجة.',
                'img_path' => 'images/products/classic_beef_burger.jpg',
                'subcategory_id' => 1,
            ],
            [
                'name_en' => 'Double Beef Burger',
                'name_ar' => 'برجر لحم مزدوج',
                'description_en' => 'A double patty beef burger with cheese and sauces.',
                'description_ar' => 'برجر لحم بطبقتين مع الجبن والصلصات.',
                'img_path' => 'images/products/double_beef_burger.jpg',
                'subcategory_id' => 1,
            ],

            // Chicken Burgers
            [
                'name_en' => 'Spicy Chicken Burger',
                'name_ar' => 'برجر دجاج حار',
                'description_en' => 'Crispy spicy chicken burger with a tangy sauce.',
                'description_ar' => 'برجر دجاج مقرمش حار مع صلصة حامضة.',
                'img_path' => 'images/products/spicy_chicken_burger.jpg',
                'subcategory_id' => 2,
            ],
            [
                'name_en' => 'Grilled Chicken Burger',
                'name_ar' => 'برجر دجاج مشوي',
                'description_en' => 'A healthy grilled chicken burger with avocado.',
                'description_ar' => 'برجر دجاج مشوي صحي مع الأفوكادو.',
                'img_path' => 'images/products/grilled_chicken_burger.jpg',
                'subcategory_id' => 2,
            ],

            // Luxury Desserts
            [
                'name_en' => 'Chocolate Fondant',
                'name_ar' => 'فوندان الشوكولاتة',
                'description_en' => 'Molten chocolate cake with a gooey center.',
                'description_ar' => 'كيك الشوكولاتة مع مركز سائل.',
                'img_path' => 'images/products/chocolate_fondant.jpg',
                'subcategory_id' => 3,
            ],
            [
                'name_en' => 'Macaron Selection',
                'name_ar' => 'اختيار الماكرون',
                'description_en' => 'A selection of luxury French macarons.',
                'description_ar' => 'مجموعة مختارة من الماكرون الفرنسي الفاخر.',
                'img_path' => 'images/products/macaron_selection.jpg',
                'subcategory_id' => 3,
            ],

            // Repeat similar data for other subcategories...
        ];

        DB::table('products')->insert($products);
    }
}