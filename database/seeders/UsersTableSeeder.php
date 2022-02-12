<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        for($i = 1; $i <= 1000; $i++) {
            $userArr[] = [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com', //use real email here
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // password
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ];
        }

        foreach($userArr as $user) {
            DB::table('users')->insert($userArr);
        }
    }
}
