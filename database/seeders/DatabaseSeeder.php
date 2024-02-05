<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Listing::create([
            'title' => 'Laravel Senior Develor',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email1@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lacinia at quis risus sed vulputate odio. In hac habitasse platea dictumst quisque sagittis purus sit amet. Tincidunt dui ut ornare lectus sit amet. Fermentum dui faucibus in ornare quam viverra orci sagittis eu.'
        ]);
    }
}
