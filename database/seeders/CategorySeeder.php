<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $men = Category::create([
            'image' => 'images/men.jpg',
            'thumbnail' => null,
            'cat_ust' => null,
            'name' => 'Men',
            'content' => 'Menswear',
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $men->id,
            'name' => 'Men Sweatshirts',
            'content' => 'Men Sweatshirts',
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $men->id,
            'name' => 'Men Hoodies',
            'content' => 'Men Hoodies',
            'status' => '1'
        ]);

        $women = Category::create([
            'image' => 'images/women.jpg',
            'thumbnail' => null,
            'cat_ust' => null,
            'name' => 'Women',
            'content' => 'Womenswear',
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $women->id,
            'name' => 'Women Bags',
            'content' => 'Women Bags',
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $women->id,
            'name' => 'Women Shoes',
            'content' => 'Women Shoes',
            'status' => '1'
        ]);

        $children = Category::create([
            'image' => 'images/children.jpg',
            'thumbnail' => null,
            'cat_ust' => null,
            'name' => 'Children',
            'content' => 'Childrenswear',
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $children->id,
            'name' => 'Children Toys',
            'content' => 'Children Toys',
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $children->id,
            'name' => 'Children Books',
            'content' => 'Children Books',
            'status' => '1'
        ]);
    }
}
