<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Mobile',
                'parent_id' => NULL,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Earphone',
                'parent_id' => NULL,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Backup Charger',
                'parent_id' => NULL,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'iPhone',
                'parent_id' => 1,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Samsung',
                'parent_id' => 1,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Xiaomi',
                'parent_id' => 1,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Mozard',
                'parent_id' => 2,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Beats',
                'parent_id' => 2,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'AVA+',
                'parent_id' => 3,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Xmobile',
                'parent_id' => 3,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
