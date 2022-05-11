<?php

namespace Database\Seeders;

use App\Models\EventType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventType::create(['name' => 'Wedding']);
        EventType::create(['name' => 'Birthday']);
        EventType::create(['name' => 'Corporate']);
    }
}
