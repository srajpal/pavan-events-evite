<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
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
        Event::factory(2)->create([
            'user_id' => $client->id,
        ]);
    }
}
