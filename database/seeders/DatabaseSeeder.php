<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $productsData = [
            ['name' => 'Product 1', 'description' => 'Description of Product 1'],
            ['name' => 'Product 2', 'description' => 'Description of Product 2'],
            ['name' => 'Product 3', 'description' => 'Description of Product 3'],
            ['name' => 'Product 4', 'description' => 'Description of Product 4'],
            ['name' => 'Product 5', 'description' => 'Description of Product 5'],
        ];

        DB::table('products')->insert($productsData);
    }
}