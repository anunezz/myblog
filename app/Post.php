<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Post extends Model
{
    protected $fillable = ["name","author","description"]; //campos a editar agregar o eliminar
    public function user(){
        return $this->belongsTo(User::class);
    }
}
