<?php

namespace Database\Factories;

use App\Models\EventType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->name(),
            'host' => $this->faker->name(),
            'start_date_time' => $this->faker->dateTime(),
            'end_date_time' => $this->faker->dateTime(),
            'location_name' => $this->faker->name(),
            'location_address' => $this->faker->address(),
            'location_city' => $this->faker->city(),
            'location_state' => $this->faker->state(),
            'location_zip' => $this->faker->postcode(),
            'location_phone' => $this->faker->phoneNumber(),
            'location_email' => $this->faker->email(),
            'location_url' => $this->faker->url(),
            'message' => $this->faker->text(),
        ];
    }
}
