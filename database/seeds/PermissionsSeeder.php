<?php

use App\Model\NivelEducativo;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\User;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions_array=[];
        $permissions_array_educad=[];
        
    	array_push($permissions_array, Permission::create(['name' => 'create_users']));
    	array_push($permissions_array, Permission::create(['name' => 'edit_users']));
        array_push($permissions_array, Permission::create(['name' => 'delete_users']));

        array_push($permissions_array, Permission::create(['name' => 'view_roles']));
    	array_push($permissions_array, Permission::create(['name' => 'create_roles']));
    	array_push($permissions_array, Permission::create(['name' => 'edit_roles']));
        array_push($permissions_array, Permission::create(['name' => 'delete_roles']));
        
        //array_push($permissions_array,Permission::create(['name' => 'view_inscripcion']));
        array_push($permissions_array,Permission::create(['name' => 'edit_preinscripcion']));
        array_push($permissions_array,Permission::create(['name' => 'delete_preinscripcion']));
        array_push($permissions_array,Permission::create(['name' => 'create_preinscripcion']));

        //permisos educad preinscri
        array_push($permissions_array_educad,Permission::create(['name' => 'view_preinscripcion']));

    	$viewBooksPermission = Permission::create(['name' => 'view_users']);
    	array_push($permissions_array, $viewBooksPermission,$permissions_array_educad);

		$superEducadRole = Role::create(['name' => 'super_educad']);
		$superEducadRole->syncPermissions($permissions_array);
        
        $superAdmin = Role::create(['name' => 'super_admin']);
        $superAdmin->syncPermissions($permissions_array);
        
        $educad = Role::create(['name' => 'educad']);
        $educad->givePermissionTo($permissions_array_educad);

        $userSuperEducad = User::create([
            'name' => 'super_educad',
            'email' => 'supereducad@finanzas.cdmx.gob.mx',
            'password' => Hash::make('supereducad123.,'),
            'status' => '1',
        ]);
        /////////////////////////////////////
        $userSuperEducad->assignRole('super_educad');

        $userSuperAdmin = User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@finanzas.cdmx.gob.mx',
            'password' => Hash::make('superadmin123.,'),
            'status' => '1',
        ]);
        /////////////////////////////////////
        $userSuperAdmin->assignRole('super_admin');
        
        $userEducad = User::create([
            'name' => 'educad',
            'email' => 'educad@finanzas.cdmx.gob.mx',
            'password' => Hash::make('educad123.,'),
            'status' => '1',
        ]);
        ///////////////////////////////////
        $userEducad->assignRole('educad');

        ///////////Create User
        User::create([
            'name' => 'guest',
            'email' => 'guest@gmail.com',
            'password' => Hash::make('guest123.,'),
            'status' => '1',
        ]);
        ///////////Create Nivel
        NivelEducativo::create([
            'nombre' => 'Bachillerato',
        ]);
        ///////////Create Nivel
        NivelEducativo::create([
            'nombre' => 'Licenciatura',
        ]);
        ///////////Create Nivel
        NivelEducativo::create([
            'nombre' => 'Maestria',
        ]);
    }
}
