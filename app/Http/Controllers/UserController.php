<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    public function getUser(){
        try {
            $users = User::with([
                'roles' => function($query){
                    $query->select('name','description');
                 },
                 'posts' => function($query){
                    $query->select('name','author','description');
                 }
              ])->get();
           // dd($users);

            return response()->json([
                'success' => true,
                'lResults' => $users
            ]);
        }catch ( \Exception $e ){
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
