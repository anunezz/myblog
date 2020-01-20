<?php

namespace App;

use App\Role;
use App\User;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    protected $table = 'role_user';
    protected $fillable = [
        'role_id', 'user_id'
    ];

    public function user(){
        return $this->belongsToMany(User::class);
    }  

    public function role(){
        return $this->belongsToMany(Role::class);
    }
   

}
