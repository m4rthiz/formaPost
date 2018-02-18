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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;


Route::get('/', function () {

      $name = 'm4r';
      $date = date('D-j-F-Y');
      $hour = date('G:i:s');
      $isWeekEnd = date('N') >= 5;


    return view('welcome', compact('name', 'date', 'hour', 'isWeekEnd'));
});

Route::resource('posts', 'PostsController');
