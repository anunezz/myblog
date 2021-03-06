<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* =========================================================================================
            COMANDOS PARA CUANDO SE INICIA LA CONFIGURACION DE LA BASE DE DATOS
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
php artisan optimize
========================================================================================== */

Route::get('/', function () {
    return view('app');
});

Route::get('/api/getusers', 'UserController@getUser');


Route::get('/hhh', function () {
    // $user = App\User::findOrFail(1);
    // return $user->roles;

    // $role = App\Role::findOrFail(1);
    // return $role->users;
    
    /* $user = App\User::findOrFail(1);
       return $user->roles()->attach(1);  agregar un rol a un usuario
       return $user->roles()->detach(1);  eliminar un rol a un usuario
       return $user->roles()->sync(2);  */

    //return $user->roles;
   // $user = App\User::findOrFail(1); //Buscar los post de un usuario
   // return $user->posts;


   //Agregando datos desde una consulta relacionada de un usuario a un post
   $user = App\User::findOrFail(1);
   
  // dd($user);
   return $user->posts()->create([
       "name"        =>   "Un post creado desde el archivo web.php",
       "author"      =>   "Joaquin",
       "description" =>   "Este es un post creado de prueba"
   ]);

    

});
