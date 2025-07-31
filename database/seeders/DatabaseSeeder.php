<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //\App\Models\User::factory(5)->create();


        Listing::factory(8)->create();

        // Listing::create([
        //     'title' => 'Frontend Developer',
        //     'tags' => 'HTML, CSS, JavaScript, React',
        //     'company' => 'TechNova Inc.',
        //     'location' => 'Makati, Philippines',
        //     'email' => 'hr@technova.com',
        //     'website' => 'https://www.technova.com',
        //     'description' => 'We are looking for a talented frontend developer to join our growing team. Must be proficient in React and modern UI/UX practices.'
        // ]);

        // Listing::create([  
        //     'title' => 'Backend Developer',
        //     'tags' => 'PHP, Laravel, MySQL, API',
        //     'company' => 'CodeSphere Solutions',
        //     'location' => 'Cebu City, Philippines',
        //     'email' => 'careers@codesphere.io',
        //     'website' => 'https://www.codesphere.io',
        //     'description' => 'Join our backend team to build scalable APIs and services. Experience in Laravel is a plus.'
        // ]);






        //User::factory(10)->create();
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
    }
}
