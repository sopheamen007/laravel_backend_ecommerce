<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'id' => 1,
                'restaurant_id' => 1,
                'name' => 'Margherita Pizza',
                'description' => 'Classic Margherita with fresh mozzarella and basil.',
                'price' => 12.99,
                'food_type' => 'Main Course',
                'image_url' => 'assets/menus/menu_pic_1.png',
                'is_available' => true,
            ],
            [
                'id' => 2,
                'restaurant_id' => 2,
                'name' => 'Pasta Carbonara',
                'description' => 'Traditional Italian pasta with creamy sauce and pancetta.',
                'price' => 14.99,
                'food_type' => 'Main Course',
                'image_url' => 'assets/menus/menu_pic_2.png',
                'is_available' => true,
            ],
            [
                'id' => 3,
                'restaurant_id' => 3,
                'name' => 'Quinoa Salad',
                'description' => 'Healthy quinoa salad with fresh vegetables and lemon dressing.',
                'price' => 10.99,
                'food_type' => 'Appetizer',
                'image_url' => 'assets/menus/menu_pic_3.png',
                'is_available' => true,
            ],
            [
                'id' => 4,
                'restaurant_id' => 3,
                'name' => 'Vegetarian Burger',
                'description' => 'Delicious veggie burger with lettuce, tomato, and avocado.',
                'price' => 11.99,
                'food_type' => 'Main Course',
                'image_url' => 'assets/menus/menu_pic_4.png',
                'is_available' => false,
            ],
            [
                'id' => 5,
                'restaurant_id' => 4,
                'name' => 'Sushi Platter',
                'description' => 'Assorted sushi platter with fresh sashimi and rolls.',
                'price' => 19.99,
                'food_type' => 'Main Course',
                'image_url' => 'assets/menus/menu_pic_5.png',
                'is_available' => true,
            ],
            [
                'id' => 6,
                'restaurant_id' => 5,
                'name' => 'Cheeseburger',
                'description' => 'Juicy cheeseburger with cheddar cheese and special sauce.',
                'price' => 9.99,
                'food_type' => 'Main Course',
                'image_url' => 'assets/menus/menu_pic_6.png',
                'is_available' => true,
            ],
            [
                'id' => 7,
                'restaurant_id' => 6,
                'name' => 'Chicken Tikka Masala',
                'description' => 'Spicy and creamy chicken tikka masala served with naan bread.',
                'price' => 13.99,
                'food_type' => 'Main Course',
                'image_url' => 'assets/menus/menu_pic_7.png',
                'is_available' => true,
            ],
            [
                'id' => 8,
                'restaurant_id' => 7,
                'name' => 'Tacos Al Pastor',
                'description' => 'Traditional Mexican tacos with marinated pork and pineapple.',
                'price' => 7.99,
                'food_type' => 'Main Course',
                'image_url' => 'assets/menus/menu_pic_8.png',
                'is_available' => true,
            ],
            [
                'id' => 9,
                'restaurant_id' => 8,
                'name' => 'Croissant',
                'description' => 'Flaky and buttery croissant, perfect for breakfast.',
                'price' => 3.99,
                'food_type' => 'Dessert',
                'image_url' => 'assets/menus/menu_pic_9.png',
                'is_available' => true,
            ],
            [
                'id' => 10,
                'restaurant_id' => 9,
                'name' => 'Kung Pao Chicken',
                'description' => 'Spicy Kung Pao chicken with peanuts and vegetables.',
                'price' => 12.49,
                'food_type' => 'Main Course',
                'image_url' => 'assets/menus/menu_pic_10.png',
                'is_available' => true,
            ],
        ]);
    }
}
