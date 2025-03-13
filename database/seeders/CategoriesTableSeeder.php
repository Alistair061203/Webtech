<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Technology', 'description' => 'Latest gadgets and software.'],
            ['name' => 'Health', 'description' => 'Health and wellness products.'],
            ['name' => 'Education', 'description' => 'Books and learning materials.'],
            ['name' => 'Fashion', 'description' => 'Trendy clothing and accessories.'],
            ['name' => 'Food', 'description' => 'Delicious and fresh food items.'],
        ]);
    }
}
