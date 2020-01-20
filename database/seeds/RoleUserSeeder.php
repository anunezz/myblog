<?php

use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    public function run()
    {
        factory(App\RoleUser::class,30)->create();
    }
}
