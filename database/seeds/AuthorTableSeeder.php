<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->delete();
        DB::table('authors')->insert(
           [
                ['name' => 'Ahsan Habib','author_code' => 'A-1','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'Jafor Iqbal','author_code' => 'A-2','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'Anowar Hossain','author_code' => 'A-3','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'Shihabuddin','author_code' => 'A-4','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'Nazrul Islam','author_code' => 'A-5','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'Sharat Chandra','author_code' => 'A-6','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'Iqbal Hossain','author_code' => 'A-7','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'Michale Modhushudhon','author_code' => 'A-8','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'Rabindra Nath Thaqur','author_code' => 'A-9','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['name' => 'Joynal Abedin','author_code' => 'A-10','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
           ]
        );
    }
}
