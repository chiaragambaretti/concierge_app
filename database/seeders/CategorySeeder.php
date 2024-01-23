<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryData = [
            ['name' => 'Transfer/Car Renting'],
            ['name' => 'Gastronomie Experience'],
            ['name' => 'Tours'],
            ['name' => 'Servizi vari']
        ];

        foreach ($categoryData as $data) {
            Category::create([
                'name' => $data['name'],
            ]);
        }

    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }
}
