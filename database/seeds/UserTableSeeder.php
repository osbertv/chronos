<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = new User();
        $admin->name = 'Administrator';
        $admin->username = 'admin';
        $admin->email = 'oevillanueva@mybcnet.net';
        $admin->password = bcrypt('osbertv');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());

        $manager = new User();
        $manager->name = 'Manager Name';
        $manager->username = 'manager';
        $manager->email = 'manager@example.com';
        $manager->password = bcrypt('manager');
        $manager->save();
        $manager->roles()->attach(Role::where('name', 'manager')->first());

        $employee = new User();
        $employee->name = 'Employee Name';
        $employee->username = 'employee';
        $employee->email = 'employee@example.com';
        $employee->password = bcrypt('employee');
        $employee->save();
        $employee->roles()->attach(Role::where('name', 'employee')->first());

 
    }
}
