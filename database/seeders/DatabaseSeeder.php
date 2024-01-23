<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoomSeeder;
use Database\Seeders\ImageSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\SubcategoriesSeeder;
use Database\Seeders\SubCategoryImageSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(CategorySeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(SubcategoriesSeeder::class);
        $this->call(SubCategoryImageSeeder::class);
    }
}
