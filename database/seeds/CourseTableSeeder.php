<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->delete();
        DB::table('courses')->insert(
           [
                ['name' => 'CSE-101','course_code' => 'C-1','faculty_id' => 1,'department_id' => 1,'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'EEE-101','course_code' => 'C-2','faculty_id' => 2,'department_id' => 2,'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'ECE-101','course_code' => 'C-3','faculty_id' => 3,'department_id' => 3,'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'ETE-101','course_code' => 'C-4','faculty_id' => 4,'department_id' => 4,'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'CIVIL-101','course_code' => 'C-5','faculty_id' => 5,'department_id' => 5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'LAW-101','course_code' => 'C-6','faculty_id' => 6,'department_id' => 6,'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'PHAR-101','course_code' => 'C-7','faculty_id' => 7,'department_id' => 7,'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'BBA-101','course_code' => 'C-8','faculty_id' => 8,'department_id' => 8,'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'ECO-101','course_code' => 'C-9','faculty_id' => 9,'department_id' => 9,'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'ENG-101','course_code' => 'C-10','faculty_id' => 10,'department_id' => 10,'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
           ]
        );
    }
}
