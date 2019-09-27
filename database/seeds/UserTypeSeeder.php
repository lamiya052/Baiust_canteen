<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\UserType;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserType::truncate();
        UserType::insert([
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
