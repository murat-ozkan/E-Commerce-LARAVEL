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
            'size' => 'Medium',
            'color' => 'blue',
            'qty' => 99,
            'status' => '1',
            'content' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit?</p>'
        ]);
        Product::create([
            'name' => 'Product2',
            'image' => 'images/cloth_2.jpg',
            'category_id' => '1',
            'short_text' => 'Lorem ipsum dolor sit amet.',
            'price' => 2100,
            'size' => 'Small',
            'color' => 'white',
            'qty' => 19,
            'status' => '1',
            'content' => '<p>Molestiae expedita veritatis nesciunt doloremque.</p>'
        ]);
        Product::create([
            'name' => 'Product3',
            'image' => 'images/cloth_1.jpg',
            'category_id' => '4',
            'short_text' => 'Lorem ipsum dolor sit.',
            'price' => 4321,
            'size' => 'Large',
            'color' => 'Black',
            'qty' => 11,
            'status' => '1',
            'content' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit?</p>'
        ]);
        Product::create([
            'name' => 'Product4',
            'image' => 'images/cloth_3.jpg',
            'category_id' => '7',
            'short_text' => 'Lorem ipsum dolor sit amet.',
            'price' => 1234,
            'size' => 'XLarge',
            'color' => 'Green',
            'qty' => 11,
            'status' => '1',
            'content' => '<p>Molestiae expedita veritatis nesciunt doloremque.</p>'
        ]);
    }
}
