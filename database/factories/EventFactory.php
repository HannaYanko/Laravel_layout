<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Event;


class EventFactory extends Factory
{

    protected $model = Event::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'date' => $this->faker->date,
            'time' => $this->faker->time,
            'description' => $this->faker->paragraph,
            'address' => $this->faker->sentence,
            'topic' => $this->faker->sentence,
            ];
    }
}
