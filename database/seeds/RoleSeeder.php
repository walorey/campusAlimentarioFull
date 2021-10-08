<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Moderador']);
        $role3 = Role::create(['name' => 'Alumno']);

        //por conveniencia le damos el mismo nombre a los permisos que a las rutas
        Permission::create(['name' => 'admin.user.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.user.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.user.store'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.user.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.user.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.user.update'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.user.destroy'])->syncRoles([$role1, $role2]);
    }
}
