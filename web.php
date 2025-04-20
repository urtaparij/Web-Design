<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/main');
});

Route::controller(MainController::class)->group(function(): void{
    Route::get('/model', 'showModel');
    Route::get('/about', 'showAbout');
    Route::get('/details/apollo-11', 'showDeAp11');
});

?>