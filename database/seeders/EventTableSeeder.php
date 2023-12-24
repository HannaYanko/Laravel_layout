<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventTableSeeder extends Seeder
{
    public function run()
    {
        Event::factory(5)->create();
    }
}
