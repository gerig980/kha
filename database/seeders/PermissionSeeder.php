<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //dashboard module
        $moduleAppDashboard = Module::updateOrCreate(['name' => 'Paneli']);
        
        Permission::updateOrCreate([
            'module_id' => $moduleAppDashboard->id,
            'name' => 'Paneli',
            'slug' => 'app.dashboard'
        ]);


        //role module
        $moduleAppRole = Module::updateOrCreate(['name' => 'Rolet']);
        
        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'Lista',
            'slug' => 'app.roles.index'
        ]);
        
        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'Krijimi',
            'slug' => 'app.roles.create'
        ]);
        
        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'Ruajtja',
            'slug' => 'app.roles.store'
        ]);
        
        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'Editimi',
            'slug' => 'app.roles.edit'
        ]);
        
        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'Fshirja',
            'slug' => 'app.roles.destroy'
        ]);
        
        //user module
        $moduleAppUser = Module::updateOrCreate(['name' => 'Përdoruesit']);
        
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Lista',
            'slug' => 'app.users.index'
        ]);
        
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Krijimi',
            'slug' => 'app.users.create'
        ]);
        
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Ruajtja',
            'slug' => 'app.users.store'
        ]);
        
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Editimi',
            'slug' => 'app.users.edit'
        ]);
        
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Fshirja',
            'slug' => 'app.users.destroy'
        ]);


        // permission module
        $moduleAppPermissions = Module::updateOrCreate(['name' => 'Permission']);
        
        Permission::updateOrCreate([
            'module_id' => $moduleAppPermissions->id,
            'name' => 'Lista',
            'slug' => 'app.permissions.index'
        ]);
        
        Permission::updateOrCreate([
            'module_id' => $moduleAppPermissions->id,
            'name' => 'Krijimi',
            'slug' => 'app.permissions.create'
        ]);
        
        Permission::updateOrCreate([
            'module_id' => $moduleAppPermissions->id,
            'name' => 'Ruajtja',
            'slug' => 'app.permissions.store'
        ]);
        
        Permission::updateOrCreate([
            'module_id' => $moduleAppPermissions->id,
            'name' => 'Editimi',
            'slug' => 'app.permissions.edit'
        ]);
        
        Permission::updateOrCreate([
            'module_id' => $moduleAppPermissions->id,
            'name' => 'Fshirja',
            'slug' => 'app.permissions.destroy'
        ]);


        
    }
}
