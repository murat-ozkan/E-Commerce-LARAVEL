<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'image' => 'https://fakeimg.pl/350x200/?text=HomePage&font=lobster',
            'name' => 'You are welcome to the opening',
            'content' => 'E-Commerce is opening on December 10th.',
            'link' => 'products',
            'status' => '1'
        ]);
    }
}
