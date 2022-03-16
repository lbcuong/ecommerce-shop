<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 1000; $i++) {
            $userData[] = [
                'name' => 'user'. $i,
                'email' => 'user'. $i .'@email.com',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ];
        }

        foreach ($userData as $user) {
            User::insert($user);
        }
    }
}
