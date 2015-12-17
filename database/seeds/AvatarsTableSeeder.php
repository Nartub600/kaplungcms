<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Avatar;

class AvatarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Avatar::truncate();

      $faker = Faker\Factory::create();

      $avatars = [
        $faker->firstName,
        $faker->firstName,
        $faker->firstName,
        $faker->firstName,
        $faker->firstName,
        $faker->firstName,
        $faker->firstName,
        $faker->firstName
      ];
      $i= 0;

      Avatar::unguard();

      foreach ($avatars as $avatar) {
        Avatar::create([
          'id' 	=> ++$i,
          'name' 		=> $avatar,
          'picture' 		=> 'public/img/avatars/1.jpg',
          'price'  => rand(100,500)
        ]);
      }

      Avatar::reguard();

      //agrego algunos avatars desbloqueados
      DB::table('avatar_user')->truncate();
      foreach(User::all() as $user)
      {
        $avatar = Avatar::orderByRaw("RAND()")->first();

        $user->avatars()->attach(
            $avatar->id
        );
      }
    }
}
