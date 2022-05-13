<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        $user=DB::table('users')->where('email',"admin@gmail.com")->first();
        if(! $user){
            User::create([
                'name'=>'admin' ,
                'email'=>'admin@gmail.com'  ,
                'password'=>Hash::make('123456789')   ,
                'role'=>'admin'
            ]);
        }
    }
}
