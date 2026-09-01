<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\TopicSeeder;
use Database\Seeders\MessageSeeder;

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

        $user1 = (string) Str::ulid();
        $user2 = (string) Str::ulid();
        $user3 = (string) Str::ulid();

        DB::table('users')->insert([
            [
                'id' => (string) Str::ulid(),
                'name' => $user3,
                'email' => 'edwin@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::ulid(),
                'name' => $user2,
                'email' => 'nonka@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::ulid(),
                'name' => $user3,
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

        $this->call([
            TopicSeeder::class,
            MessageSeeder::class,
        ]);


        // /*
        // |--------------------------------------------------------------------------
        // | Topics
        // |--------------------------------------------------------------------------
        // */


        // DB::table('topics')->insert([
        //     [
        //         'id' => 1,
        //         'name' => 'Laravel',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'MongoDB',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'API',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);

        /*
        |--------------------------------------------------------------------------
        | Messages
        |--------------------------------------------------------------------------
        */

        // DB::table('messages')->insert([
        //     [
        //         'topic_id' => 1,
        //         'message' => 'How do I create a Laravel seeder using ULIDs?',
        //         'read_at' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'topic_id' => 2,
        //         'message' => 'How do I connect Laravel to MongoDB Atlas?',
        //         'read_at' => null,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'topic_id' => 3,
        //         'message' => 'What is the best way to structure API resources?',
        //         'read_at' => null,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);
    }
}
