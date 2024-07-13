<?php

use App\Http\Controllers\Admins\AdminsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Props\PropertiesController;
use App\Http\Controllers\Users\UsersController;
use App\Models\Prop\Property;
use Illuminate\Support\Facades\Route;


Route::get('/', [PropertiesController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// aqui en adelante lo nuevo

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home1');
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
    Route::delete('sacar-props/{id}', [UsersController::class, 'sacarprops'])->name('sacar.props');
    Route::delete('sacar-reation/{id}', [UsersController::class, 'sacarrelationprops'])->name('sacar.relation.props');
});




Route::get('admin/login', [AdminsController::class, 'viewLogin'])->name('view.login')->middleware('checkforauth');
Route::post('admin/login', [AdminsController::class, 'checkLogin'])->name('check.login');

Route::group(['prefix' => 'admin',], function () {

    Route::get('/index', [AdminsController::class, 'index'])->name('admins.dashboard');


    //admins
    Route::get('/all-admins', [AdminsController::class, 'allAdmins'])->name('admins.admins');
    Route::get('/create-admins', [AdminsController::class, 'createAdmins'])->name('admins.create');
    Route::post('/create-admins', [AdminsController::class, 'storeAdmins'])->name('admins.store');


    //hometypes
    Route::get('/all-hometypes', [AdminsController::class, 'allHomeTypes'])->name('admins.hometypes');
    Route::get('/create-hometypes', [AdminsController::class, 'createHomeTypes'])->name('hometypes.create');
    Route::post('/create-hometypes', [AdminsController::class, 'storeHomeTypes'])->name('hometypes.store');


    //update
    Route::get('/edit-hometypes/{id}', [AdminsController::class, 'editHomeTypes'])->name('hometypes.edit');
    Route::post('/update-hometypes/{id}', [AdminsController::class, 'updateHomeTypes'])->name('hometypes.update');

    //delelte
    Route::get('/delete-hometypes/{id}', [AdminsController::class, 'deleteHomeTypes'])->name('hometypes.delete');


    //requests
    Route::get('/all-requests', [AdminsController::class, 'Requests'])->name('requests.all');




    ///props
    Route::get('/all-props', [AdminsController::class, 'allProps'])->name('props.all');


    //create props
    Route::get('/create-props', [AdminsController::class, 'createProps'])->name('props.create');
    Route::post('/create-props', [AdminsController::class, 'storeProps'])->name('props.store');

    //create gallery
    Route::get('/create-gallery', [AdminsController::class, 'createGallery'])->name('gallery.create');
    Route::post('/create-gallery', [AdminsController::class, 'storeGallery'])->name('gallery.store');



    //delete props

    Route::get('/delete-props/{id}', [AdminsController::class, 'deleteProps'])->name('props.delete');
});

require __DIR__.'/auth.php';
