<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// web.php: It’s the file where you define routes (the URLs the user visits and what they do).
// Controller (e.g., UserController.php): It’s where you define the logic that happens when a route is accessed.

// web.php defines routes (URLs and HTTP methods).
// Controllers (e.g., UserController.php) contain the logic for handling requests made to those routes.


// web.php
// use App\Http\Controllers\UserController;
// Route::get('/user/{id}', [UserController::class, 'show']);


// controller.php
// class UserController extends Controller
// {
//     public function show($id)
//     {
//         $user = User::find($id);
//         return view('user.profile', compact('user'));
//     }
// }



class PageController extends Controller
{
    //
    public function showUser(string $id){
        // return "<h1>Welcome to Controller</h1>";
        // return view('user', ['id' => $id]);
        return view('user', compact('id'));
    }
    //
    public function showHome(){
        // return "<h1>Welcome to Controller</h1>";
        return view('welcome');
    }
    //
    public function showBlog(){
        // return "<h1>Welcome to Controller</h1>";
        return view('blog');
    }
}
