<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Spatie\Permission\PermissionRegistrar;

class PermissionAndRoleSeeder extends Seeder
{

    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'add to cart']);
        Permission::create(['name' => 'add to wishlist']);
        Permission::create(['name' => 'checkout']);
        Permission::create(['name' => 'add item']);
        Permission::create(['name' => 'edit item']);
        Permission::create(['name' => 'delete item']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'customer']);
        $role1->givePermissionTo('add to cart');
        $role1->givePermissionTo('add to wishlist');
        $role1->givePermissionTo('checkout');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('add item');
        $role2->givePermissionTo('edit item');
        $role2->givePermissionTo('delete item');


        $user = User::create([
            'name' => 'admin', 
            'email' => 'admin@test.com',
            'password' => bcrypt('password')
        ]);

        $user1 = User::create([
            'name' => 'user', 
            'email' => 'user@test.com',
            'password' => bcrypt('password')
        ]);

        $user->assignRole('admin');
        $user1->assignRole('customer');
    }
}
