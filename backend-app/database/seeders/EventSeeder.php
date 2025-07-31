<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        $today = Carbon::today();

        $events = [
            // Today’s Events
            ['title' => 'Laravel Basics Workshop', 'description' => 'Introductory Laravel session', 'date' => $today, 'time' => '10:00', 'location' => 'Bangalore, India'],
            ['title' => 'React Meet & Greet', 'description' => 'Networking event for React devs', 'date' => $today, 'time' => '14:00', 'location' => 'New York City, USA'],


            // Future Events
            ['title' => 'AI in Healthcare', 'description' => 'Explore AI trends in medical tech', 'date' => $today->copy()->addDays(2), 'time' => '09:00', 'location' => 'Berlin, Germany'],
            ['title' => 'Startup Pitch Day', 'description' => 'Pitch your idea to investors', 'date' => $today->copy()->addDays(4), 'time' => '11:00', 'location' => 'Toronto, Canada'],
            ['title' => 'Gaming Expo 2025', 'description' => 'New tech in gaming industry', 'date' => $today->copy()->addDays(5), 'time' => '13:00', 'location' => 'Tokyo, Japan'],


            // Past Events
            ['title' => 'Web3 Seminar', 'description' => 'Blockchain and decentralized apps', 'date' => $today->copy()->subDays(2), 'time' => '09:30', 'location' => 'Singapore'],
            ['title' => 'UX Design Sprint', 'description' => 'Hands-on UI/UX sprint session', 'date' => $today->copy()->subDays(3), 'time' => '10:00', 'location' => 'Amsterdam, Netherlands'],
            ['title' => 'Security Bootcamp', 'description' => 'Web & app security essentials', 'date' => $today->copy()->subDays(4), 'time' => '11:00', 'location' => 'Tel Aviv, Israel'],
            ['title' => 'Cloud Native DevOps', 'description' => 'Kubernetes & Docker training', 'date' => $today->copy()->subDays(6), 'time' => '12:00', 'location' => 'Paris, France'],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
