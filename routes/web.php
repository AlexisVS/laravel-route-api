<?php

use App\Http\Controllers\PokemonController;
use App\Http\Resources\Pokemon;
use App\Http\Resources\User;
use App\Imports\PokemonImport;
use App\Models\Pokemon as ModelsPokemon;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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
    return view('Home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Route::apiResource('pokemon', Pokemon::class);
// Route::get('/user/{id}', function ($id) {
//     return new User(ModelsUser::findOrFail($id));
// });
require __DIR__.'/auth.php';
