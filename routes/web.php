<?php

use Illuminate\Support\Facades\Route;

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


//authentication routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

//event route: passing a value for the events
Route::get('events/{id}', function ($id) {
    return view('events.show',[
        'events' => $id
    ]);
})
->name('events.show');

Route::get('book/{id}', function($id){
    return view('events.booking',[
        'book' => $id
    ]);
})
->name('event.booking');




//home route
Route::get('/', function () {
    return view('home');
})->name('home');//defining home


