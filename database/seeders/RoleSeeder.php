<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SuperAdminPermissions = Permission::all();
        
        Role::updateOrCreate([
            'name' => 'Super Admin',
            'slug' => 'super-admin',
            ])->permissions()->sync($SuperAdminPermissions->pluck('id'));
            
        Role::updateOrCreate([
            'name' => 'Admin',
            'slug' => 'admin'
            ]);
            
        Role::updateOrCreate([
            'name' => 'manager',
            'slug' => 'manager'
            ]);
            
    }
}
