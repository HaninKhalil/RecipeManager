<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Redirect root to recipes page
Route::get('/', function () {
    return redirect()->route('recipes.index');
});

// Recipe routes - includes all CRUD operations
Route::resource('recipes', RecipeController::class);

Route::get('/hello', function () {
    dd("Hello, Laravel!");
   });
 
Route::get('/h', function () {
    return view('home');
});

   
