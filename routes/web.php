<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\QuestionsController;
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


Route::get('/', [ContentController::class, 'show_homepage']);
Route::get('/start', [ContentController::class, 'show_questions']);
Route::post('/result', [QuestionsController::class, 'show_result']);
