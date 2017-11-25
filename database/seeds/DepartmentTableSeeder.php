<?php

use Illuminate\Database\Seeder;
use App\Departments;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = new Departments();
        $department->name = 'Wordpress';
        $department->save();

        $department = new Departments();
        $department->name = 'Sales';
        $department->save();

        $department = new Departments();
        $department->name = 'Support ';
        $department->save();

        $department = new Departments();
        $department->name = 'Envato ';
        $department->save();

        $department = new Departments();
        $department->name = 'Services ';
        $department->save();

        $department = new Departments();
        $department->name = 'Designing ';
        $department->save();

        $department = new Departments();
        $department->name = 'SEO';
        $department->save();

        $department = new Departments();
        $department->name = 'Marketing';
        $department->save();

    }
}
