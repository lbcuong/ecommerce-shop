<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'category_id' => '1',
                'group_id' => '1',
                'name' => 'Apple IPhone 12 128GB 4GB RAM White',
                'price' => '12000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '1',
                'group_id' => '1',
                'name' => 'Apple IPhone 13 Pro Max 256GB 6GB RAM Blue',
                'price' => '13000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '1',
                'group_id' => '1',
                'name' => 'Apple IPhone 13 Pro 128GB 6GB RAM Silver',
                'price' => '14000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '1',
                'group_id' => '1',
                'name' => 'Apple IPhone 12 Pro Max 256GB 6GB RAM Blue',
                'price' => '15000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '1',
                'group_id' => '1',
                'name' => 'Apple IPhone 12 Pro 512GB 6GB RAM Gold',
                'price' => '16000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '1',
                'group_id' => '1',
                'name' => 'Apple IPhone 13 128GB 4GB RAM Black',
                'price' => '17000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '1',
                'group_id' => '2',
                'name' => 'Samsung Galaxy Z Fold3 5G 512GB 12GB RAM Phantom Silver',
                'price' => '32000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '1',
                'group_id' => '2',
                'name' => 'Samsung Galaxy A03s 64GB 4GB RAM White',
                'price' => '12000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '1',
                'group_id' => '2',
                'name' => 'Samsung Galaxy S20 FE 256GB 8GB RAM Cloud Mint',
                'price' => '22000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '1',
                'group_id' => '2',
                'name' => 'Samsung Galaxy Z Fold2 5G 256GB 12GB RAM Mystic Black',
                'price' => '32000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '1',
                'group_id' => '2',
                'name' => 'Samsung Galaxy Z Flip3 5G 256GB 8GB RAM Lavender',
                'price' => '35000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '1',
                'group_id' => '2',
                'name' => 'Samsung Galaxy Note 20 256GB 8GB RAM Mystic Bronze',
                'price' => '24000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '1',
                'group_id' => '3',
                'name' => 'Xiaomi 11T 256GB 8GB RAM Moonlight White',
                'price' => '15000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '1',
                'group_id' => '3',
                'name' => 'Xiaomi Mi 11 256GB 8GB RAM Horizon Blue',
                'price' => '15000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '1',
                'group_id' => '3',
                'name' => 'Xiaomi Redmi Note 10 Pro 128GB 8GB RAM Onyx Gray',
                'price' => '11000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '1',
                'group_id' => '3',
                'name' => 'Xiaomi Redmi 9T 64GB 4GB RAM Sunrise Orange',
                'price' => '12000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '1',
                'group_id' => '5',
                'name' => 'Beats Flex MYMC2 Wireless Black In-ear',
                'price' => '2000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '2',
                'group_id' => '4',
                'name' => 'Mozard Z7000A Black In-ear',
                'price' => '3000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '3',
                'group_id' => '6',
                'name' => 'AVA+ PB100S',
                'price' => '4000000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '3',
                'group_id' => '7',
                'name' => 'Xmobile Atela 10',
                'price' => '1500000',
                'detail' => 'Screen Super Retina XDR OLED, 6.1 inches | Main Camera Dual 12 MP, 12 MP | Selfie Camera Single 12 MP | RAM 4GB | Storage 128G | CPU Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) | GPU Apple GPU (4-core graphics) | SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by) | Pin Li-Ion 2815 mAh, non-removable (10.78 Wh)',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
