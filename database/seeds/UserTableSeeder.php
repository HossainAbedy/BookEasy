<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert(
           [
                ['name' => 'Abedy','email' => 'abedy.ewu@gmail.com','user_type' => 'admin', 'password' => bcrypt('123'),'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
           ]
        );
    }
}
