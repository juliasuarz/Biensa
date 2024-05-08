<?php

namespace Database\Seeders;

use App\Models\Event;
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
        $events = [
            [
                'event' => 'Cita #1',
                'start_date' => '2024-05-02 08:00',
                'end_date' => '2024-05-02 11:00',
            ],
            [
                'event' => 'Cita #2',
                'start_date' => '2024-05-03 10:00',
                'end_date' => '2024-05-04 11:00',
            ],
            [
                'event' => 'Cita #3',
                'start_date' => '2024-05-06 08:00',
                'end_date' => '2024-05-06 11:00',
            ],
            [
                'event' => 'Cita #4',
                'start_date' => '2024-05-07 09:00',
                'end_date' => '2024-05-07 11:00',
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}