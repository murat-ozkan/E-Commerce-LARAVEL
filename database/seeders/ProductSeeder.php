<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Product1',
            'image' => 'images/cloth_1.jpg',
            'category_id' => '1',
            'short_text' => 'Lorem ipsum dolor sit.',
            'price' => 100,
            'size' => 'small',
            'color' => 'blue',
            'qty' => 99,
            'status' => '1',
            'content' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit?</p>'
        ]);
        Product::create([
            'name' => 'Product2',
            'image' => 'images/cloth_2.jpg',
            'category_id' => '3',
            'short_text' => 'Lorem ipsum dolor sit amet.',
            'price' => 2100,
            'size' => 'medium',
            'color' => 'white',
            'qty' => 19,
            'status' => '1',
            'content' => '<p>Molestiae expedita veritatis nesciunt doloremque.</p>'
        ]);
    }
}
