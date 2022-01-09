<?php

use App\Http\Controllers\PokemonController;
use App\Http\Resources\Pokemon as ResourcesPokemon;
use App\Http\Resources\User;
use App\Models\Pokemon;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::group(['prefix' => 'v1'], function () {
//     Route::apiResource('/pokemon', PokemonController::class);
// });

Route::prefix('v1')->group(function () {
    Route::apiResource('/pokemons', PokemonController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

