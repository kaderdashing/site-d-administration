<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name'=>'doyen']) ;
        Role::create(['name'=>'administration']) ;
        Role::create(['name'=>'enseignant']) ;
        Role::create(['name'=>'etudiant']) ;

    }
}
