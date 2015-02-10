<?php

use Illuminate\Database\Seeder;
use RecPoc\User;

class UsersTableSeeder extends Seeder{
    public function run(){
        foreach(range(1,30) as $index){
            User::create(['email' => $index.'email'.$index.'@email.com','password' => Hash::make('password')]);
        }
    }
}