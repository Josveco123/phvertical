<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Props\PropertiesController;
use App\Http\Controllers\Users\UsersController;
use App\Models\Prop\Property;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {return view('home');});

Route::get('/', [PropertiesController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// aqui en adelante lo nuevo

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
});


Route::group(['prefix' => 'props'], function() {
    Route::get('/prop-details/{id}', [PropertiesController::class, 'single'])->name('single.prop');
    //inserting requests
    Route::post('prop-details/{id}', [PropertiesController::class, 'insertRequests'])->name('insert.request');
    //saving props
    Route::post('save-props/{id}', [PropertiesController::class, 'saveProps'])->name('save.prop');
    //displaying props by rent and buy
    Route::get('type/Buy', [PropertiesController::class, 'propsBuy'])->name('buy.prop');
    Route::get('type/Rent', [PropertiesController::class, 'propsRent'])->name('rent.prop');
    //displaying props by home type
    Route::get('home-type/{hometype}', [PropertiesController::class, 'displayByHomeType'])->name('display.prop.hometype');
    //displaying props by price asc and desc
    Route::get('price-asc', [PropertiesController::class, 'priceAsc'])->name('price.asc.prop');
    Route::get('price-desc', [PropertiesController::class, 'priceDesc'])->name('price.desc.prop');
    //searcing for props
    Route::any('search', [PropertiesController::class, 'searchProps'])->name('search.prop');
});

Route::group(['prefix' => 'users'], function () {
    Route::get('all-requests', [UsersController::class, 'allRequests'])->name('all.requests');
    Route::get('all-saved-props', [UsersController::class, 'allSavedProps'])->name('all.saved.props');
});
