<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gastronomieCategory = Category::where('name', 'Gastronomie Experience')->first();

        if ($gastronomieCategory) {
            $subcategories = [
                'Cheese Tasting',
                'Wine Tasting',
                'Cocktail Masterclass',
                'Cooking class',
            ];

            foreach ($subcategories as $subcategoryName) {
                Subcategory::create([
                    'name' => $subcategoryName,
                    'category_id' => $gastronomieCategory->id,
                ]);
            }
        }
    }
}
