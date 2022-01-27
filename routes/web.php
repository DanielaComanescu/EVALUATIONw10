<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\DesignerController;

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

Route::post('/delete/{id}', [ActionController::class, 'delete']);

Route::get('/update/{id}', [NavController::class, 'updateCharacter']);
Route::post('/updateForm{id}', [ActionController::class, 'updateCharacter']);


Route::get('/listDesigners', [DesignerController::class, 'listDesigners']);

Route::get('/addDesigner', [DesignerController::class, 'addDesigner']);
Route::post('/newDesigner', [DesignerController::class, 'ajouterDesigner']);

Route::post('/deleteDesigner/{id}', [DesignerController::class, 'deleteDesigner']);

Route::get('/modifierDesigner/{id}', [DesignerController::class, 'updateDesigner']);
Route::post('/modifDesigner{id}', [DesignerController::class, 'upDesigner']);

