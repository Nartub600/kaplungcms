<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\User::truncate();

      //agrego un admin admin para poder entrar
      DB::table('users')->insert([
            'name' => 'admin',
            'firstname' => 'Juan Domingo',
            'lastname' => 'Peron',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

      //agrego unos 50 para hacer bulto
      factory(App\User::class, 50)->create();
    }
}
