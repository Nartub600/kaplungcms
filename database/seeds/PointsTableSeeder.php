<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Point;

class PointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Point::truncate();

        $faker = Faker\Factory::create();

        $value_points = [10, 20, 30, 40, 50, 100];

        foreach(range(1, 1000) as $index)
    		{
    			$user = User::orderByRaw("RAND()")->first();

          $rand_value = array_rand($value_points);

    			Point::create([
    				'ecommerce_transaction_id' 	=> $index,
    				'value' 		=> $value_points[$rand_value],
    				'user_id'	=> $user->id
    			]);
    		}
    }
}
