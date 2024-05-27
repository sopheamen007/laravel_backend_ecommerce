<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Manual data for 10 cart records
        $cartData = [
            [
                'menu_id' => 1,
                'user_id' => 1,
                'quantity' => 2,
                'total_price' => 45.97,
            ],
            [
                'menu_id' => 2,
                'user_id' => 2,
                'quantity' => 4,
                'total_price' => 65.98,
            ],
            [
                'menu_id' => 3,
                'user_id' => 3,
                'quantity' => 1,
                'total_price' => 25.50,
            ],
            [
                'menu_id' => 4,
                'user_id' => 4,
                'quantity' => 3,
                'total_price' => 35.75,
            ],
            [
                'menu_id' => 5,
                'user_id' => 5,
                'quantity' => 2,
                'total_price' => 40.20,
            ],
            [
                'menu_id' => 6,
                'user_id' => 6,
                'quantity' => 2,
                'total_price' => 30.50,
            ],
            [
                'menu_id' => 7,
                'user_id' => 7,
                'quantity' => 5,
                'total_price' => 55.30,
            ],
            [
                'menu_id' => 8,
                'user_id' => 8,
                'quantity' => 3,
                'total_price' => 42.75,
            ],
            [
                'menu_id' => 9,
                'user_id' => 9,
                'quantity' => 2,
                'total_price' => 28.90,
            ],
            [
                'menu_id' => 10,
                'user_id' => 10,
                'quantity' => 1,
                'total_price' => 18.99,
            ],
        ];

        // Insert data into the carts table
        foreach ($cartData as $data) {
            DB::table('carts')->insert($data);
        }
    }
}
