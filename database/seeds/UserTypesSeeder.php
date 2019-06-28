<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\RoleType;

class RoleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsersTypes::truncate();
        UsersTypes::insert([
            [
                'id'       =>'1',
                'user_type_name'       => 'Student',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'id'       => '2',
                'user_type_name'       => 'Teacher',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],

            [
                'id'       => '3',
                'user_type_name'       => 'Staff',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]

        ]);
    }
}
