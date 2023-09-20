<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com'
            // we don't need password because we won't log in with this user
        ]);

        Listing::factory(6)->create([
            // this will add the newly created user id to the 6 listings
            'user_id' => $user->id
        ]);
    }
}