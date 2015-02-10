<?php

use Illuminate\Database\Seeder;
use RecPoc\User;

class UsersTableSeeder extends Seeder{
    public function run(){
        $users = [];
        foreach($users as $user){
            User::create(['email' => str_random(20).'@email.com','password' => Hash::make('password'),'age'=>$user['age'],'gender'=>$user['gender'],'occupation'=>$user['occupation'],'zip'=>$user['zipcode']]);
        }
    }
}