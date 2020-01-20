<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Post extends Model
{
    //protected $fillable = ["name","author","description"]; //campos a editar agregar o eliminar
    protected $fillable = ["user_id","name","author","description"];
    // public function user(){
    //     return $this->belongsTo(User::class);
    // }
    
    //Aqui es solo para agregar varios post
    public function users(){
        return $this->belongsToMany(User::class);
    }


}
