<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Message;
use App\Models\Topic;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $general = Topic::where('name', 'general')->firstOrFail();
        $feedback = Topic::where('name', 'feedback')->firstOrFail();
        // $oops = Topic::where('name', 'website oops')->firstOrFail();

        Message::factory()
            ->for($general)
            ->create([
                'subject' => 'General enquiry',
            ]);
    }

}
