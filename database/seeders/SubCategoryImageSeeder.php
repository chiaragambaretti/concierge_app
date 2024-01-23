<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use App\Models\ImageSubcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubCategoryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ImageSubcategory::create([
            'subcategory_id' => 1, 
            'path' => '/sub-img/cheese-tasting.jpg', 
        ]);

        ImageSubcategory::create([
            'subcategory_id' => 2, 
            'path' => '/sub-img/wine-tasting.jpg', 
        ]);

        ImageSubcategory::create([
            'subcategory_id' => 3, 
            'path' => '/sub-img/cocktail-masterclass.jpg', 
        ]);

        ImageSubcategory::create([
            'subcategory_id' => 4, 
            'path' => '/sub-img/coocking-class.jpg', 
        ]);

    }
}
