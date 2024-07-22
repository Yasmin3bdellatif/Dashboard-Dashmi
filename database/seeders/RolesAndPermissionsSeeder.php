<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // إنشاء الأدوار
        $adminRole = Role::create(['name' => 'admin']);
        $supervisorRole = Role::create(['name' => 'supervisor']);
        $editorRole = Role::create(['name' => 'editor']);

        // إنشاء الصلاحيات
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'approve products']);
        Permission::create(['name' => 'create products']);
        Permission::create(['name' => 'edit own products']);

        // تعيين الصلاحيات للأدوار
        $adminRole->givePermissionTo(['manage users', 'approve products']);
        $supervisorRole->givePermissionTo('approve products');
        $editorRole->givePermissionTo(['create products', 'edit own products']);
    }
}
