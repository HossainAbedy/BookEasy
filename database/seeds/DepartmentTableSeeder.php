<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->delete();
        DB::table('departments')->insert(
           [
                ['name' => 'CSE','department_code' => 'D-1','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'EEE','department_code' => 'D-2','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'ECE','department_code' => 'D-3','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'ETE','department_code' => 'D-4','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'CIVIL','department_code' => 'D-5','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'LAW','department_code' => 'D-6','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'PHAR','department_code' => 'D-7','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'BBA','department_code' => 'D-8','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'ECO','department_code' => 'D-9','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'ENG','department_code' => 'D-10','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
           ]
        );
    }
}
