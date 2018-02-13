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
use App\Post;


Route::get('/', function () {

      $name = 'marie thizy';


    return view('welcome', compact('name'));
});

Route::resource('posts', 'PostsController');
