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

Route::get('/', function () {
    $user = Auth::user();
    if ($user) {
      if ($user -> isAdmin()) {
        echo "This user is an administrator";
      } else {
        echo "This user is not an administrator";
      }
    } else {
      return view('welcome');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/user/roles', ['middleware' => 'role', function () {
  return "Middleware role";
}]);
