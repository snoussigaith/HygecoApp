<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactFormController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//contact
Route::get('/pages/contact', function () {
    return view('contact');
});
Route::post('submit-contact-form', [App\Http\Controllers\ContactFormController::class, 'submitForm'])->name('submit-contact-form');
//about
Route::get('/pages/about', function () {
    return view('a-propos');
});
//contact-commercial
Route::get('/pages/contact-commercial', function () {
    return view('contact-commercial');
});
Route::post('submit-contact-commercial', [App\Http\Controllers\ContactCommercialController::class, 'submitForm'])->name('submit-contact-commercial');

//plan
Route::get('/pages/plan', function () {
    return view('plan');
});
//service
Route::get('/pages/services', function () {
    return view('service');
});
Route::get('/pages/menage', function () {
    return view('reservation');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/contacts', [App\Http\Controllers\ContactFormController::class, 'index'])->name('contacts');
    Route::get('/contacts-commercial', [App\Http\Controllers\ContactCommercialController::class, 'index'])->name('contacts-commercial');

});
Route::group(['middleware' => ['role:SubAdmin|admin']], function() {

    Route::resource('permissions',  App\Http\Controllers\PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionController::class, 'destroy']);

    Route::resource('roles',  App\Http\Controllers\RoleController::class);
    Route::get('roles/{roleId}/delete', [App\Http\Controllers\RoleController::class, 'destroy']);
    Route::get('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'givePermissionToRole']);

    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::get('users/{userId}/delete', [App\Http\Controllers\UserController::class, 'destroy']);

});







require __DIR__.'/auth.php';
