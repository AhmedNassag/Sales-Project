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
        $this->call(AdminSeeder::class);
        $this->call(AccountTypesSeeder::class);
        $this->call(MovTypeSeeder::class);
        $this->call(InvItemcardMovementsCategoriesSeeder::class);
        $this->call(InvItemcardMovementsTypesSeeder::class);
    }
}
