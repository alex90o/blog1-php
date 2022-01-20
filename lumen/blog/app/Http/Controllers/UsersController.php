<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
   function index(){
    //return response()->json([], status:200);
    //   return "Users";
    //$user = new User();
   // $user-> name = 'Belana';
    //$user-> email = 'belatorres@hotmail.com';
      // $user->password
    //return response()->json([$user], status:200);  
     $users = User::all();
       return response()->json([$users], status:200);
   
    }
}