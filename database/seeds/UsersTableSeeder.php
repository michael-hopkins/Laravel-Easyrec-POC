<?php

use Illuminate\Database\Seeder;
use RecPoc\User;

class UsersTableSeeder extends Seeder{
    public function run(){
        foreach(range(1,29) as $index){
            User::create(['email' => $index.'email'.$index.'@email.com']);
        }
    }
}