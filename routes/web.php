<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ControllerEmp;
 
 /*
Route::get('delete',  function () {
   return view('welcome');
});
 */
Route::get('/', [ControllerEmp::class, 'show']);

Route::post('execute', [ControllerEmp::class, 'execute']);

Route::post('delete', [ControllerEmp::class, 'delete']);


/*
Single Action Controler

Route::get('/', "SingleAction@");

 

// Group Controler


Route::group(["prefix" =>"account"], function () {
    
    Route::get('/signin', function () {
        return "Sign In";
    });

    Route::get('/signup', function () {
        return "Sign Up";
    });

    Route::get('/profile', function () {
        return "Profile";
    });
});

*/