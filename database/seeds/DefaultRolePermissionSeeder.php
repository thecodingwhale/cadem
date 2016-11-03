<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role as SpatieRole;
use Spatie\Permission\Models\Permission as SpatiePermission;
use App\Role;
use App\Permission;

class DefaultRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SpatieRole::create([
            'name' => Role::SUPERADMIN
        ]);
        SpatieRole::create([
            'name' => Role::ADMIN
        ]);
        SpatieRole::create([
            'name' => Role::STUDENT
        ]);
        SpatieRole::create([
            'name' => Role::TEACHER
        ]);
        SpatieRole::create([
            'name' => Role::GUARDIAN
        ]);

        SpatiePermission::create([
            'name' => Permission::ALL
        ]);
    }
}

