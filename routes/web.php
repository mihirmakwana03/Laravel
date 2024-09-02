<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LoginCheck;
use App\Http\Middleware\SubjectCheck;

Route::get('/', function () {
	return view('welcome');
});

use App\Http\Controllers\DBController;

Route::get('/search', [DBController::class, 'search']);
Route::post('/search', [DBController::class, 'search']);

Route::view('/login', 'DB.login');
Route::post('/authenticate', [DBController::class, 'login']);

Route::view('/insert', 'DB.submit');
Route::post('/submit', [DBController::class, 'submit']);

// Route::view('/update', 'DB.update');
Route::get('/update', [DBController::class, 'updateUser']);
Route::post('/update', [DBController::class, 'updated']);

Route::view('/delete', 'DB.delete');
Route::post('/deleteForm', [DBController::class, 'delete']);

Route::get('/display', [DBController::class, 'display']);
Route::get('/users', [DBController::class, 'users']);
Route::get('/insertUser', [DBController::class, 'insertUser']);

// Route::view("/if", '../blade/if');

// use App\Http\Controllers\LoopsController;
// Route::get('/for', [LoopsController::class, 'for']);
// Route::get('/while', [LoopsController::class, 'while']);

// use App\Http\Controllers\LoginController;
// Route::view("/login", 'form');
// Route::post('/data', [LoginController::class, 'login']);

// use App\Http\Controllers\Overload;
// Route::get('/overload/{id?}', [Overload::class, 'Check']);

// use App\Http\Controllers\OverloadLogin;
// Route::get('/overloadLogin/{id?}/{pass?}', [OverloadLogin::class, 'login']);
// Route::get('/overloadLogin/{id?}/{pass?}', [OverloadLogin::class, 'login'])->where(['id' => '[a-zA-Z]+', 'pass' => '[a-zA-Z]+']);


// use App\Http\Controllers\ControllerMiddleware;
// use App\Http\Middleware\MiddlewareController;
// Route::get('/view', ControllerMiddleware::class)->middleware(MiddlewareController::class);

// use App\Http\Controllers\SquareController;
// use App\Http\Controllers\CubeController;
// Route::get('/square/{number}', SquareController::class);
// Route::get('/cube/{number}', CubeController::class);

// use App\Http\Controllers\Operations;
// Route::get('/fact/{a}', [Operations::class, 'factorial']);
// Route::get('/odd/{a}', [Operations::class, 'odd']);
// Route::get('/even/{a}', [Operations::class, 'even']);

// use App\Http\Controllers\ArithmeticController;
// Route::get('/add/{num1}/{num2}', [ArithmeticController::class, 'add']);
// Route::get('/sub/{num1}/{num2}', [ArithmeticController::class, 'sub']);
// Route::get('/mul/{num1}/{num2}', [ArithmeticController::class, 'mul']);
// Route::get('/div/{num1}/{num2}', [ArithmeticController::class, 'div']);

// use App\Http\Controllers\SingleActionController;
// Route::get('/server', SingleActionController::class);

// use App\Http\Controllers\ResourceController;
// Route::match(['get', 'post'], '/user', [ResourceController::class, 'store']);
// Route::resource('user', ResourceController::class);


// use App\Http\Controllers\UserController;
// Route::get('/user/{id}/{name}', [UserController::class, 'index']);
// Route::get('/user', [UserController::class, 'user']);

// Route::get('/', function () {
//     return view('../middleware_ex/home');
// });


// use App\Http\Middleware\GlobalMiddlewareExample;
// Route::get('/', function () {
//     return "Home Page";
// })->middleware(GlobalMiddlewareExample::class);

// Route::get('/voter', function () {
//     return view('../Voter/voter');
// })->middleware('group1');


// use App\Http\Middleware\AgeCheck;
// Route::get('/voter', function () {
//     return view('/');
// })->middleware(AgeCheck::class);

// Route::get('/about/{uname}/{pass}', function ($uname, $pass) {
//     return view('../middleware_ex/about');
// });

// Route::get('/contact/{uname}/{pass}', function ($uname, $pass) {
//     return view('../middleware_ex/contact');
// });

// Route::get('/dashboard/{uname}/{pass}', function ($uname, $pass) {
//     return view('../middleware_ex/dashboard');
// });


// Route::get('/voter/{age}/', function () {
//     return view('../Voter/voter');
// })->middleware(Vote::class);

// Route::get('/', function () {
//     return view('../named_route/home');
// })->name('home-page');

// Route::get('/about', function () {
//     return view('../named_route/about');
// })->name('about-page');

// Route::get('/contact', function () {
//     return view('../named_route/contact');
// })->name('contact-page');

// Route::prefix('pages')->group(function () {
//     Route::get('/', function () {
//         return view('../Route_groups/home');
//     })->name('home');

//     Route::get('/about', function () {
//         return view('../Route_groups/about');
//     })->name('about');

//     Route::get('/contact', function () {
//         return view('../Route_groups/contact');
//     })->name('contact');
// });

// Route::view('/', '../States/home');
// Route::view('/login', '../States/login');
// Route::view('/gj', '../States/gj');
// Route::view('/hp', '../States/hp');
// Route::view('/mp', '../States/mp');
// Route::view('/mh', '../States/mh');
// Route::view('/rj', '../States/rj');
// Route::view('/up', '../States/up');

// Route::get('/states', function () {
// 	echo "States";
// });

// Route::post('/gj', function () {
// 	return Redirect('../States/gj');
// });

// Route::any('/price', function () {
// 	echo "Price";
// });

// Route::match(['get', 'post'], '/search', function () {
// 	echo "Search";
// });

// Add more routes here as needed

// Route::view('/', 'home');
// Route::view('/features', 'features');
// Route::view('/pricing', 'pricing');

// Route::get(
//     '/post/{id}',
//     function ($id) {
//         return "id number is : " . $id;
//     }
// )->where('id', '[0-9]+');

// Route::get(
//     '/post/{id}/{name}',
//     function ($id, $name) {
//         return "id number is : " . $id . " " . $name;
//     }
// );
// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// });