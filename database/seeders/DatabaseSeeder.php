<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Users
        |--------------------------------------------------------------------------
        */

        DB::table('users')->insert([
            [
                'id' => (string) Str::ulid(),
                'name' => 'John Carter',
                'email' => 'john@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::ulid(),
                'name' => 'Sarah Wilson',
                'email' => 'sarah@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::ulid(),
                'name' => 'Michael Brown',
                'email' => 'michael@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Contacts
        |--------------------------------------------------------------------------
        */

        DB::table('contacts')->insert([
            [
                'id' => (string) Str::ulid(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::ulid(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::ulid(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::ulid(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::ulid(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
               'id' => (string) Str::ulid(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::ulid(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::ulid(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);



        /*
        |--------------------------------------------------------------------------
        | Topics
        |--------------------------------------------------------------------------
        */

        DB::table('topics')->insert([
            [
                'id' => 1,
                'user_id' => $johnId,
                'subject' => 'Laravel Questions',
                'status' => 'open',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'user_id' => $sarahId,
                'subject' => 'MongoDB Help',
                'status' => 'open',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'user_id' => $michaelId,
                'subject' => 'API Development',
                'status' => 'closed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Messages
        |--------------------------------------------------------------------------
        */

        DB::table('messages')->insert([
            [
                'topic_id' => 1,
                'user_id' => $johnId,
                'message' => 'How do I create a Laravel seeder using ULIDs?',
                'read_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_id' => 2,
                'user_id' => $sarahId,
                'message' => 'How do I connect Laravel to MongoDB Atlas?',
                'read_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_id' => 3,
                'user_id' => $michaelId,
                'message' => 'What is the best way to structure API resources?',
                'read_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
