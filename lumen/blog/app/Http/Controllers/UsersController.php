<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
  function index(Request $request){
    //return "Users";
   // $user = new User();
   // $user-> name = 'Belana';
   // $user-> email = 'belatorres@hotmail.com';
   // $user->password
   if ($request->isJson()) {
     $users = User::all();
     return response()->json($users, status:200);
   }
   return response()->json(['error' => 'Unaathorized'], status:401);
}
function createUser(Request $request){
  if ($request->isJson()) {
   //TODO: Create the user in the DB
    
      $data = $request->json()->all();
      $user = User::create([
         'name' => $data['name'],
         'username' => $data['username'],
         'email' => $data['email'],
         'password' => Hash::make($data['password']),
         'api_token' => Str::random(60),
      ]);
   return response()->json($user, status:201);
 }
 return response()->json(['error' => 'Unaathorized'], status:401);
}
function getToken(Request $request) {
  if($request->isJson()){
     try{
        $data = $request->json()->all();
        $user = User::where('username',  $data['username'])->first();
        if($user && Hash::check($data['password'], $user->password)){
           return response()->json($user, status:200);
        }
        else{
           return response()->json(['error'=> 'No content'], status:406);
           }
     }catch (ModelNotFoundException $e){
        return response()->json(['error'=> 'No content'], status:406);
     }
  }
  return response()->json(['error' => 'Unaathorized'], status:401);
}
}