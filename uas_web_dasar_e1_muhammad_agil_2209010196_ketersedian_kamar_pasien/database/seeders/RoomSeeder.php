<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;
use App\Models\RoomLevel;

class RoomSeeder extends Seeder
{
    public function run()
    {
        $vip = RoomLevel::where('level_name', 'VIP')->first();
        $general = RoomLevel::where('level_name', 'General')->first();
        $icu = RoomLevel::where('level_name', 'ICU')->first();

        Room::create(['level_id' => $vip->id, 'room_number' => 'VIP-220', 'description' => 'Kamar VIP lantai 2', 'status' => 'available']);
        Room::create(['level_id' => $general->id, 'room_number' => 'GEN-202', 'description' => 'Kamar General lantai 2', 'status' => 'available']);
        Room::create(['level_id' => $icu->id, 'room_number' => 'ICU-403', 'description' => 'Kamar ICU lantai 1', 'status' => 'available']);
    }
}
