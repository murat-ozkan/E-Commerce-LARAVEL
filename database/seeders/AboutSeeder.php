<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'image' => 'no image link',
            'name' => 'How We Started',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam, nemo exercitationem itaque eveniet architecto cumque, deleniti commodi molestias repellendus quos sequi hic fugiat asperiores illum. Atque, in, fuga excepturi corrupti error corporis aliquam unde nostrum quas.',
            'text_1_icon' => 'icon-truck',
            'text_1' => 'FREE SHIPPING',
            'text_1_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.',
            'text_2_icon' => 'icon-refresh2',
            'text_2' => 'FREE RETURNS',
            'text_2_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.',
            'text_3_icon' => 'icon-help',
            'text_3' => 'CUSTOMER SUPPORT',
            'text_3_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.'
        ]);
    }
}
