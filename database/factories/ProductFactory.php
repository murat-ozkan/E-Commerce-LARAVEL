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
        $category_id = random_int(1, 9);
        $sizelist = ['S', 'M', 'L', 'XL'];
        $colorlist = ['White', 'Black', 'Red', 'Blue', 'Yellow'];

        $color = $colorlist[random_int(0, 4)];
        $size = $sizelist[random_int(0, 3)];

        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $short_text = substr(str_shuffle($characters), 0, 20);

        $price = random_int(0, 5000);
        $qty = random_int(0, 99);

        $content = substr(str_shuffle($characters), 0, 20);

        return [
            'name' => $color . ' ' . $size . ' Product',
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
