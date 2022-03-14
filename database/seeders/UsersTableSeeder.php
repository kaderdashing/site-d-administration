<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        DB::table('role_user')->truncate() ;
        
       $doyen = User::create([
            'name' => 'doyen' ,
            'email' => 'doyen@doyen.com' ,
            'password' =>  Hash::make('password')


        ]) ;

      $administration = User::create([
            'name' => 'administration' ,
            'email' => 'administration@administration.com' ,
            'password' =>  Hash::make('password')


        ]) ;

       $enseignant = User::create([
            'name' => 'enseignant' ,
            'email' => 'enseignant@enseignant.com' ,
            'password' =>  Hash::make('password')

        ]) ;

      $etudiant= User::create([
            'name' => 'etudiant' ,
            'email' => 'etudiant@etudiant.com' ,
            'password' =>  Hash::make('password')


        ]) ;

        $doyenRole = Role::where('name','doyen')->first() ;
        $administrationRole = Role::where('name','administration')->first() ;
        $enseignantRole = Role::where('name','enseignant')->first() ;
        $etudiantRole = Role::where('name','etudiant')->first() ;

        $doyen->roles()->attach($doyenRole) ;
        $administration->roles()->attach($administrationRole) ;
        $enseignant->roles()->attach($enseignantRole) ;
        $etudiant->roles()->attach($etudiantRole) ;



    }
}
