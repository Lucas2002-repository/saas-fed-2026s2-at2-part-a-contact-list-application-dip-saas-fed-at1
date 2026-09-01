<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
   use App\Models\Topic;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $topics = [
            [
                'name' => 'general',
                'description' => 'General enquiries',
                'available' => true,
            ],
            [
                'name' => 'feedback',
                'description' => 'Feedback and suggestions',
                'available' => true,
            ],
        ];

        foreach ($topics as $topic) {
            Topic::updateOrCreate(
                ['name' => $topic['name']],
                $topic,
            );
        }
    }
}
