<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Personalinfo::factory(10)->create();

        \App\Models\city::create([
            'name' => 'cairo',
        ]);
        \App\Models\city::create([
            'name' => 'Tanta',
        ]);

        \App\Models\Nationality::create([
            'name' => 'egyptian',
        ]);

        \App\Models\originalyCountry::create([
            'name' => 'Egypt',
        ]);

    }
}
