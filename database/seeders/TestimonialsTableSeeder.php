<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'name' => 'John Doe',
                'price' => 25.0,
                'comment' => 'Great food and excellent service!',
                'date' => '2024-05-20',
                'number_of_rates' => 10,
                'star_rating' => 4.5,
                'photo_url' => 'assets/profiles/profile_pic_1.png',
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'name' => 'Alice Smith',
                'price' => 30.0,
                'comment' => 'The ambiance was wonderful, and the food was delicious.',
                'date' => '2024-05-19',
                'number_of_rates' => 12,
                'star_rating' => 5.0,
                'photo_url' => 'assets/profiles/profile_pic_2.png',
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'name' => 'Bob Johnson',
                'price' => 20.0,
                'comment' => 'I loved the variety of dishes available. Will definitely visit again!',
                'date' => '2023-12-15',
                'number_of_rates' => 8,
                'star_rating' => 4.0,
                'photo_url' => 'assets/profiles/profile_pic_3.png',
            ],
            [
                'id' => 4,
                'user_id' => 4,
                'name' => 'Emily Davis',
                'price' => 35.0,
                'comment' => 'The staff was very friendly and accommodating. Had a great time!',
                'date' => '2023-11-23',
                'number_of_rates' => 15,
                'star_rating' => 4.5,
                'photo_url' => 'assets/profiles/profile_pic_4.png',
            ],
            [
                'id' => 5,
                'user_id' => 5,
                'name' => 'David Wilson',
                'price' => 40.0,
                'comment' => 'The food exceeded my expectations. Will recommend to friends!',
                'date' => '2023-10-31',
                'number_of_rates' => 20,
                'star_rating' => 5.0,
                'photo_url' => 'assets/profiles/profile_pic_5.png',
            ],
            [
                'id' => 6,
                'user_id' => 6,
                'name' => 'Emma Martinez',
                'price' => 28.0,
                'comment' => 'Had a wonderful dining experience. The desserts were amazing!',
                'date' => '2023-09-18',
                'number_of_rates' => 10,
                'star_rating' => 4.5,
                'photo_url' => 'assets/profiles/profile_pic_6.png',
            ],
            [
                'id' => 7,
                'user_id' => 7,
                'name' => 'Michael Brown',
                'price' => 22.0,
                'comment' => 'The restaurant had a cozy atmosphere. Enjoyed every moment!',
                'date' => '2023-08-27',
                'number_of_rates' => 7,
                'star_rating' => 4.0,
                'photo_url' => 'assets/profiles/profile_pic_7.png',
            ],
            [
                'id' => 8,
                'user_id' => 8,
                'name' => 'Sophia Clark',
                'price' => 27.0,
                'comment' => 'Delicious food and prompt service. Will definitely come back again.',
                'date' => '2023-07-12',
                'number_of_rates' => 14,
                'star_rating' => 4.5,
                'photo_url' => 'assets/profiles/profile_pic_8.png',
            ],
            [
                'id' => 9,
                'user_id' => 9,
                'name' => 'Oliver Taylor',
                'price' => 18.0,
                'comment' => 'Affordable prices and great quality food. Loved it!',
                'date' => '2023-06-25',
                'number_of_rates' => 6,
                'star_rating' => 4.0,
                'photo_url' => 'assets/profiles/profile_pic_9.png',
            ],
            [
                'id' => 10,
                'user_id' => 10,
                'name' => 'Ava Harris',
                'price' => 32.0,
                'comment' => 'The staff went above and beyond to make our dining experience memorable.',
                'date' => '2023-05-11',
                'number_of_rates' => 9,
                'star_rating' => 4.5,
                'photo_url' => 'assets/profiles/profile_pic_10.png',
            ],
        ]);
    }
}
