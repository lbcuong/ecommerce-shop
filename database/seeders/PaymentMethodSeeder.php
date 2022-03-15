<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_method')->insert([
            [
                'name' => 'Credit / Debit / ATM Card',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Paypal',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Momo',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Cash On Delivery',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
