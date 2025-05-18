<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::get('/post', function () {
//     return view('post');
//     // return 'This is post page';
// });

// Route::get('/hello', function () {
//     // return view('post');
//     return 'This is post page';
// });

// Route::view('/post', 'post');


// Route::get('/post/firstpost', function () {
//     return view('firstpost');
// });


// Route::get('/about', function () {
//     return view('about');
// });


// Route::get('page/post', function () {
//     return view('post');
// })->name('mypost');

// Route::get('/postsss', function () {
//     return view('post');
// })->name('mypost');

// Route::get('/postsssssss', function () {
//     return view('post');
// });


// redirection 
// Route::get('/test', function () {
//     return view('about');
// });

// Route::redirect('/about', '/test');

// Route::redirect('/about', '/test', 301);

// Route Group 


// Route::get('page/about', function () {
//     return "<h1>About Page</h1>"; });


// Route::get('page/gallery', function () {
//     return "<h1>Gallery Page</h1>"; });

// Route::get('page/post/firstpost', function () {
//     return "<h1>First Post Page</h1>"; });

// Route::prefix('page')->group(function () {
//     Route::get('/about', function () {
//         return "<h1>About Page</h1>";
//     });

//     Route::get('/gallery', function () {
//         return "<h1>Gallery Page</h1>";
//     });

//     Route::get('/post/firstpost', function () {
//         return "<h1>First Post Page</h1>";
//     }); });
// });

// Route::get('page/about', function () {
//         return "<h1>About Page</h1>"; });


// Route::get('page/gallery', function () {
//         return "<h1>Gallery Page</h1>"; });

// Route::get('page/post/firstpost', function () {
//         return "<h1>First Post Page</h1>"; });

// page not found page
Route::fallback(function () {
    return "<h1>Sorry Page Not Found</h1>";
});

// Route::get('/about', function () {
//     return view('about');
// })->name('about'); 

// Route::get('/post', function () {
//     return view('post');
// })->name('post'); 

// Route::get('/test', function () {
//     return view('test');
// })->name('test'); 

// Route::get('/users', function () {
//     return view('users' , ['user' => 'Irum Zaidi']);
// })->name('users'); 

// Route::get('/users', function () {
//     $name = 'Irum Zaidi';
//     return view('users' , ['user' => $name]);
// })->name('users'); 

// Route::get('/users', function () {
//     $name = 'Irum Zaidi';
//     return view('users' , ['user' => 'Irum Zaidi', 'city' => 'Lahore']); });

// Route::get('/users', function () {
//     $name = 'Irum Zaidi';
//     return view('users' , [
//         'user' => 'Irum Zaidi', 
//         'city' => 'Lahore'
//     ]); });

// Route::get('/users', function () {
//     $name = 'Irum Zaidi';
//     return view('users' , [
//         'user' => 'Irum Zaidi', 
//         'city' => '<script>alert("Lahore");</script>'
//     ]); });

// Route::get('/users', function () {
//     $name = 'Irum Zaidi';
//     return view('users')
//     ->with('user', $name)
//     ->with('city', 'Lahore');                       
//     ; });

// Route::get('/users', function () {
//     $name = 'Irum Zaidi';
//     return view('users')->withUser( $name)->withCity('Lahore'); });

// Route::get('/users', function () {
//     $name = 'Irum Zaidi';
//     return view('users')
//     ->with('user', $name)
//     ->with('city', '');                       
//     ; });

// function getUsers() {
//     return [
//         1 => ['name' => 'Irum Zaidi', 'city' => 'Lahore', 'phone' => '1234567890'],
//         2 => ['name' => 'Ali Khan', 'city' => 'Karachi', 'phone' => '0987654321'],
//         3 => ['name' => 'Sara Ali', 'city' => 'Islamabad', 'phone' => '1122334455'],
//         4 => ['name' => 'Ahmed Khan', 'city' => 'Peshawar', 'phone' => '5566778899'],
//         5 => ['name' => 'Fatima Khan', 'city' => 'Quetta', 'phone' => '9988776655'],
//     ];
// }

// Route::get('/users', function () {
//     // $names = [
//     //     1 => ['name' => 'Irum Zaidi', 'city' => 'Lahore', 'phone' => '1234567890'],
//     //     2 => ['name' => 'Ali Khan', 'city' => 'Karachi', 'phone' => '0987654321'],
//     //     3 => ['name' => 'Sara Ali', 'city' => 'Islamabad', 'phone' => '1122334455'],
//     //     4 => ['name' => 'Ahmed Khan', 'city' => 'Peshawar', 'phone' => '5566778899'],
//     //     5 => ['name' => 'Fatima Khan', 'city' => 'Quetta', 'phone' => '9988776655'],
//     // ];

//     $names = getUsers();
//     return view('users', [
//         'user' => $names
//     ]);
// });

// Route::get('/user/{id}', function ($id) {

//     $users = getUsers(); 
//     $user = $users[$id];
//     return view('user',[
//         'id' => $user
//     ]);

//     })->name('view.user');

// Route::get('/user/{id}', function ($id) {

//     $users = getUsers(); 
//     abort_if(!isset($users[$id]), 404, 'User not found');
//     $user = $users[$id];
//     return view('user',[
//         'id' => $id,
//         'user' => $user
//     ]);

//     })->name('view.user');

// Route::get('/', [PageController::class, 'showHome']);
// Route::get('/user', [PageController::class, 'showUser']);
// Route::get('/', [PageController::class, 'showHome'])->name('home');
// Route::get('/user', [PageController::class, 'showUser'])->name('users');
// Route::get('/user/{id}', [PageController::class, 'showUser'])->name('users');
// Route::get('/blog', [PageController::class, 'showBlog'])->name('blog');


// Route::get('/', [PageController::class, 'showHome'])->name('home');
// Route::get('/user/{id}', [PageController::class, 'showUser'])->name('users');
// Route::get('/blog', [PageController::class, 'showBlog'])->name('blog');


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'showHome')->name('home');
    Route::get('/user/{id}', 'showUser')->name('users');
    Route::get('/blog', 'showBlog')->name('blog');
});

Route::get('/test', TestingController::class);

