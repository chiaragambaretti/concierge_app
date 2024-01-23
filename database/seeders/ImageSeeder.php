<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Image::create([
            'category_id' => 1, 
            'path' => '/img/car-img.avif', 
        ]);

        Image::create([
            'category_id' => 2,
            'path' => '/img/tagliere-img.jpg',
        ]);

        Image::create([
            'category_id' => 3,
            'path' => '/img/barca-img.jpg',
        ]);

        Image::create([
            'category_id' => 4,
            'path' => '/img/shopping-img.avif',
        ]);

    }
}
