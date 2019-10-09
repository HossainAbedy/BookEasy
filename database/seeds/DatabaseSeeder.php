<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(AuthorTableSeeder::class);
        $this->call(FacultyTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(CourseTableSeeder::class);
    }
}
