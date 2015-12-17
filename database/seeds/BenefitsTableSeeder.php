<?php

use Illuminate\Database\Seeder;
use App\Benefit;
use App\User;

class BenefitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Benefit::truncate();

      $benefits = [
        'Descuento del 15% de bienvenida',
        'Smile Points',
        'Sorpresa de cumpleaños',
        'Happy Presents'
      ];
      $i= 0;

      Benefit::unguard();

      foreach ($benefits as $benefit) {
        Benefit::create([
          'id' 	=> ++$i,
          'description' 		=> $benefit
        ]);
      }

      Benefit::reguard();

      //le asocio unos beneficios a todos los usuarios
      DB::table('benefit_user')->truncate();
      foreach(User::all() as $user)
      {

        foreach (Benefit::all() as $benefit) {

          $user->benefits()->attach(
            $benefit->id, ['consumed' => (bool)rand(0,1)]
          );
        }
      }
    }
}
