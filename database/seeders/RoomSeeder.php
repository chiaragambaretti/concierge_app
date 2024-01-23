<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roomData = [
            ['room_number' => '1501', 'password' => bcrypt('Stresa1501')],
            ['room_number' => '1502', 'password' => bcrypt('Stresa1502')],
            ['room_number' => '1503', 'password' => bcrypt('Stresa1503')],
            ['room_number' => '1504', 'password' => bcrypt('Stresa1504')],
        ];

        foreach ($roomData as $data) {
            Room::create([
                'room_number' => $data['room_number'],
                'password' => $data['password'],
            ]);
        }

    }
}
