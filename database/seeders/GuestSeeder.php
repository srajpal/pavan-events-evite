<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = Event::find(1);
        $guests = Guest::factory(rand(1, 3))->create([
            'user_id' => $event->user->id
        ]);
        $event->guests()->attach($guests);
        $event = Event::find(2);
        $guests = Guest::factory(rand(1, 3))->create([
            'user_id' => $event->user->id
        ]);
        $event->guests()->attach($guests);
    }
}
