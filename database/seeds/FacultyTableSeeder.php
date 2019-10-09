<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FacultyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculties')->delete();
        DB::table('faculties')->insert(
           [
                ['name' => 'DMRH','faculty_code' => 'F-1','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'SSK','faculty_code' => 'F-2','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'FAZ','faculty_code' => 'F-3','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'SMRH','faculty_code' => 'F-4','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'AKD','faculty_code' => 'F-5','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'KMH','faculty_code' => 'F-6','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'RMA','faculty_code' => 'F-7','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'RHA','faculty_code' => 'F-8','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'SIS','faculty_code' => 'F-9','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'HAS','faculty_code' => 'F-10','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
           ]
        );
    }
}
