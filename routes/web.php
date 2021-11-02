<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        'title' => 'This is my first practice',
        'name' => 'Rizky Cahya Nugraha',
        'active' => 'home',
        'alamat' => 'No Where',
    ]);
});

Route::resource('tasks',TaskController::class);