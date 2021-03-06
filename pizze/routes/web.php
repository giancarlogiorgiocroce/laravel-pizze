<?php

use App\Pizza;
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

// Route::get('/', function () {
//     return view('guest.welcome');
// })->name('welcome');

Route::get('/', function () {
    return view('guest.vue.pizze');
})->name('welcome');

Route::get('/pizzeapi-3892', function() {
    $pizze = Pizza::all();
    return $pizze->toJson(JSON_PRETTY_PRINT);
});


Auth::routes();

Route::middleware('auth')
                    ->name('admin.')
                    ->namespace('Admin')
                    ->prefix('admin')
                    ->group(function(){
                        Route::get('/', 'PageController@index')->name('index');
                        Route::resource('pizze', 'PizzaController');
                    });
