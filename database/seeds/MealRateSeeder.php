<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\MealRate;

class MealRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MealRate::truncate();
        MealRate::insert([
            [
                'id'       =>'1',
                'meal_rate_name'       => 'package_1',
                'breakfast_rate'       => '30',
                'breakfast_menu'       => 'Bread,Egg,Banana',
                'lunch_rate'           => '70',
                'lunch_menu'           => 'Beef',
                'dinner_rate'          => '50',
                'dinner_menu'          => 'Fish',
                'active'               => '1',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],

            [
                'id'       =>'2',
                'meal_rate_name'       => 'package_2',
                'breakfast_rate'       => '50',
                'breakfast_menu'       => 'Biriyani',
                'lunch_rate'           => '60',
                'lunch_menu'           => 'Chicken',
                'dinner_rate'         => '80',
                'dinner_menu'         => 'Mutton',
                'active'       => '0',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],

            [
                'id'       =>'3',
                'meal_rate_name'       => 'package_3',
                'breakfast_rate'       => '35',
                'breakfast_menu'       => 'Khichuri',
                'lunch_rate'           => '40',
                'lunch_menu'       => 'vegetable',
                'dinner_rate'       => '50',
                'dinner_menu'       => 'Fish',
                'active'       => '0',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]


        ]);
    }
}

