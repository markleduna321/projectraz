<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',

           'product-list',
           'product-create',
           'product-edit',
           'product-delete',

           'user-list',
           'user-create',
           'user-edit',
           'user-delete',

           'inventory-list',
           'inventory-create',
           'inventory-edit',
           'inventory-delete',

           'purchase-list',
           'purchase-create',
           'purchase-edit',
           'purchase-delete',

           'reports-list',
           'reports-create',
           'reports-edit',
           'reports-delete',

           'accounts-list',
           'accounts-create',
           'accounts-edit',
           'accounts-delete',

           'accept-list',
           'accept-create',
           'accept-edit',
           'accept-delete',

           'reqcurrent-list',
           'reqcurrent-create',
           'reqcurrent-edit',
           'reqcurrent-delete',
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}