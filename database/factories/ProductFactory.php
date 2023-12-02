<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;
use Random\Randomizer;

use function Laravel\Prompts\text;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $name = substr(str_shuffle($characters), 0, 20);
        $category_id = random_int(1, 9);
        $short_text = substr(str_shuffle($characters), 0, 20);
        $price = random_int(0, 5000);
        $sizelist = ['XS', 'S', 'M', 'L', 'XL'];
        $size = $sizelist[random_int(0, 4)];
        $colorlist = ['White', 'Black', 'Red', 'Blue', 'Yellow'];
        $color = $colorlist[random_int(0, 4)];
        $qty = random_int(0, 99);
        $content = substr(str_shuffle($characters), 0, 20);


        return [
            'name' => $name,
            'category_id' => $category_id,
            'short_text' => $short_text,
            'price' => $price,
            'size' => $size,
            'color' => $color,
            'qty' => $qty,
            'status' => '1',
            'content' => $content
        ];
    }
}
