<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        admin --   administrar los datos del crud
        master --- va poder hacer todo
        client --  no podra modificar el crud
        */
        $master = Role::create(['name' => 'master']);
        $admin = Role::create(['name' => 'admin']);
        $client = Role::create(['name' => 'client']);

        Permission::create(["name" => "home"])->syncRoles([$admin, $master]);
        /**
         *  ruta para los producto
         *
         */
        Permission::create(['name' => 'productoindex'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'productoedit'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'productoshow'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'productocreate'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'productoeliminar'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'productoupdate'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'productostore'])->syncRoles([$admin, $master]);
        /**
         * distribuidores
         */
        Permission::create(['name' => 'distribuidorindex'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'distribuidoredit'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'distribuidorshow'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'distribuidorcreate'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'distribuidoreliminar'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'distribuidorupdate'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'distribuidorstore'])->syncRoles([$admin, $master]);
        /*
blog
*/
        Permission::create(['name' => 'blogindex'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'blogedit'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'blogshow'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'blogcreate'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'blogeliminar'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'blogupdate'])->syncRoles([$admin, $master]);
        Permission::create(['name' => 'blogstore'])->syncRoles([$admin, $master]);
        /*
user
*/
        Permission::create(['name' => 'userindex'])->assignRole($master);
        Permission::create(['name' => 'useredit'])->assignRole($master);
        Permission::create(['name' => 'usershow'])->assignRole($master);
        Permission::create(['name' => 'usercreate'])->assignRole($master);
        Permission::create(['name' => 'usereliminar'])->assignRole($master);
        Permission::create(['name' => 'userupdate'])->assignRole($master);
        Permission::create(['name' => 'userstore'])->assignRole($master);
           /*
        user
        */
        Permission::create(['name' => 'export'])->assignRole($master);
    }
}
