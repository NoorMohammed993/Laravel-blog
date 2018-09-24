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
        $user=App\User::create([
        
        'name'=>'Noor Mohammed',
        'email'=>'noor@gmail.com',
        'password'=>bcrypt('noor1993'),
        'admin'=>1
        
        
        ]);
        
        App\Profile::create([
        
        'user_id'=>$user->id,
        'avatar'=>'uploads/avatar/noor.jpg',
        'about'=>'kgrfgjri kfvnrifvnrifv fkvnmefimeif fkrnfirdfm',
        'facebook'=>'www.noormohammed.facebook.com',
        'youtube'  =>'noor.youtube.com' 
        
        
        ]);
        
        
    }
}
