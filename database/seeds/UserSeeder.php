<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,30)->create();

        App\User::create([
            'name' => 'Adrián Núñez Alanis',
            'email' => 'gunrockadrianoo@gmail.com',
            'password' => bcrypt('1990')
        ]);
    }
}
