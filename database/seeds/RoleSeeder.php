<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class RoleSeeder extends Seeder
{
    public function run()
    {
             // DB::table('roles')->insert([   
        App\Role::insert([
            [
                'name' => 'Administrador',
                'description' => 'Puede manipular todo el sistema',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Capturista',
                'description' => 'Solo puede ingresar datos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cliente',
                'description' => 'Solo puede ver los datos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
       // factory(App\Role::class,50)->create();
    }
}
