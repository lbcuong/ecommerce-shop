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
        for ($i=0; $i < 300; $i++) {
            $userData[] = [
                'name' => 'user'. $i,
                'email' => 'user'. $i .'@odinbi.com',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ];
        }

        foreach ($userData as $user) {
            User::insert($user);
        }

        for ($i=300; $i < 600; $i++) {
            $userData1[] = [
                'name' => 'user'. $i,
                'email' => 'user'. $i .'@dinco.com',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ];
        }

        foreach ($userData1 as $user1) {
            User::insert($user1);
        }

        for ($i=600; $i < 900; $i++) {
            $userData2[] = [
                'name' => 'user'. $i,
                'email' => 'user'. $i .'@dufago.com.vn',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ];
        }

        foreach ($userData2 as $user2) {
            User::insert($user2);
        }
    }
}
