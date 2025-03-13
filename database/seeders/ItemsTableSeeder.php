<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->insert([
            ['name' => 'Laptop', 'price' => 999.99, 'category_id' => 1], 
            ['name' => 'Vitamins', 'price' => 19.99, 'category_id' => 2], 
            ['name' => 'Math Textbook', 'price' => 49.99, 'category_id' => 3], 
            ['name' => 'T-Shirt', 'price' => 25.99, 'category_id' => 4], 
            ['name' => 'Pizza', 'price' => 12.99, 'category_id' => 5], 
        ]);
    }
}
