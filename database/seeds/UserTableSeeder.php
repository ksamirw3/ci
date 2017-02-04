<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use App\User;
use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('users')->delete();
    
    User::create(array(
    	'name'     => 'Admin',
        'email'    => 'admin@localhost.com',
        'password' => Hash::make('admin987'),
    ));
  }
}