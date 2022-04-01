<?php

namespace Database\Seeders;

use App\Models\CategoryNestedSet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(PermissionAndRoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategoryNestedSet::class);
    }
}
