<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   		$employee = new User();
	    $employee->name = 'Astrid Febrianca';
	    $employee->email = 'petugas123@example.com';
	    $employee->department = 'Informatika';
	    $employee->divisi = 'kesehatan';
	    $employee->password = bcrypt('secret');
	    $employee->save();

	    $manager = new User();
	    $manager->name = 'Adi Darmawan';
	    $manager->email = 'manager123@example.com';
	    $manager->department = 'Informatika';
	    $manager->divisi = 'kesehatan';
	    $manager->password = bcrypt('secret');
	    $manager->save();
    }
}
