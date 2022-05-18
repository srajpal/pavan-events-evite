<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventType;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = User::where('role', User::USER_ROLE_CLIENT)->first();
        // Event::factory()->create([
        //     'user_id' => $client->id,
        // ])->eventType()->attach(EventType::all()->random());
        // Event::factory()->create([
        //     'user_id' => $client->id,
        // ])->eventType()->attach(EventType::all()->random());
        Event::factory(2)->create([
            'user_id' => $client->id,
        ]);

        Event::factory()->create([
            'user_id' => $client->id,
            'name' => 'Birthday Party',
            'event_type' => EventType::where('name', 'Birthday')->first()->id,
            'host' => 'Sunny Rajpal',
            'start_date_time' => Carbon::parse(now())->addDays(30),
            'end_date_time' =>  Carbon::parse(now())->addDays(32),
            'location_name' => 'Birthday Venue',
            // 'location_address' => $this->faker->address(),
            // 'location_city' => $this->faker->city(),
            // 'location_state' => $this->faker->state(),
            // 'location_zip' => $this->faker->postcode(),
            // 'location_phone' => $this->faker->phoneNumber(),
            // 'location_email' => $this->faker->email(),
            // 'location_url' => $this->faker->url(),
            'message' => 'Please celebrate a birthday with us.',
        ]);
    }
}
