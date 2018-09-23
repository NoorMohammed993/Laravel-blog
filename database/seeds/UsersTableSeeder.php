<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
        
        'name'=>'Noor Mohammed',
        'email'=>'noor@gmail.com',
        'password'=>bcrypt('noor1993')
        
        
        ]);
    }
}
