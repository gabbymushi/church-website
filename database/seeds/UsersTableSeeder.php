<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
          'name'=>'Meru Diocese',
          'email'=>'admin@admin.com',
           'password'=>Hash::make('admin')
    	]);
        
    }
}
