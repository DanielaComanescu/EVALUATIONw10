<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

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

Route::get('/', [NavController::class, 'welcome']);

Route::get('/list', [NavController::class, 'listCharacters']);

Route::get('/infoCharacter/{id}', [NavController::class, 'details']);

Route::get('/addCharacter', [NavController::class, 'add']);
Route::post('/newCharacter', [ActionController::class, 'add']);

Route::post('/delete', [ActionController::class, 'delete']);

Route::get('/update/{id}', [NavController::class, 'updateCharacter']);
Route::post('/updateForm', [ActionController::class, 'updateCharacter']);


Route::get('/listDesigners', [NavController::class, 'listDesigners']);

Route::get('/addDesigner', [NavController::class, 'addDesigner']);
Route::post('/newDesigner', [ActionController::class, 'addDesigner']);

Route::post('/deleteDesigner', [ActionController::class, 'deleteDesigner']);

Route::get('/updateDesigner/{id}', [NavController::class, 'updateDesigner']);
Route::post('/updateFormDesigner', [ActionController::class, 'updateDesigner']);

