<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $role_petugas = new Role();
	    $role_petugas->name = 'ROLE_PETUGAS';
	    $role_petugas->description = 'A User with Admin Priviledge';
	    $role_petugas->save();

	    $role_manager = new Role();
	    $role_manager->name = 'ROLE_MANAGER';
	    $role_manager->description = 'A User with Super Admin Priviledge';
	    $role_manager->save();
    }
}
