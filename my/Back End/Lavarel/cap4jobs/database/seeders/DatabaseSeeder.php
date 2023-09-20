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
    //    Listing::create([
    //     'title'=>'Laravel Senior Developer',
    //     'tags'=>'laravel, javascript',
    //     'company'=>'Acme Corp',
    //     'location'=>'Boston',
    //     'email'=>'enail@gmail.com',
    //     'website'=>'https://www.acme.corp',
    //     'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, minus? Sed, id nulla. Labore qui et minus, laborum dolorum voluptate quaerat ab ea neque illo impedit voluptatem, porro architecto eum.'
    //    ]);  OR
      $user=User::factory()->create([
        'name'=>'John Doe',
        'email'=>'johndoe@gmail.com' //we don't need password we wont log in with this user
      ]);
      Listing::factory(50)->create([
        //this will add the newly created user id to our listings
        'user_id'=>$user->id
      ]);
    }
}
