<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $categories = [
        //     ['name' => 'Tops'],
        //     ['name' => 'Jeans'],
        //     ['name' => 'Shoes'],
        //     ['name' => 'Accessories']
        // ];
        // User::factory(3)->create();
        // foreach ($categories as $categoryData) {
        //     $userId=rand(1,3);
        //     $category = Category::create($categoryData);
        //     Product::factory(5)->create([
        //         'category_id' => $category->id,
        //         'user_id'=>$userId
        //     ]);
        // }
    }
}
