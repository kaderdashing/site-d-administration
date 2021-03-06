<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use \App\Models\User ;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //  \App\Models\User::factory(10)->create();
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
