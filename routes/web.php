<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/people', [PeopleController::class, 'getAll'] );
Route::post('/people', [PeopleController::class, 'createOne'] );
Route::put('/people/{id}', [PeopleController::class, 'updateOne'] );
Route::get('/people/{id}', [PeopleController::class, 'getOne'] );
Route::delete('/people/{id}', [PeopleController::class, 'deleteOne'] );