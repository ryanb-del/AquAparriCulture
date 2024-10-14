<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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

// route for the landing page
Route::get('/', function () {
    return view('welcome');
});



// redirects to specific dashboard based on the role of the user
Route::get('/dashboard', function () {
    if(Auth::user()->roles[0]->name == "admin")
    {
       // return Auth::user()->roles[0]->name;
        return view('admin.dashboard');
    }
    else
    {
        // return Auth::user()->roles[0]->name;
        return view('users.dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



// admin routes here
Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->middleware('can:admin-access')->group(function(){

    // add routes here for admin
    Route::resource('/users','UserController',['except' => ['create','store','destroy']]);
    Route::get('/userfeedbacks','UserController@userfeedback')->name('userfeedback');

    Route::resource('/fruits','CTRLfruits');

    Route::resource('/vegetable','CTRLvegetable');

    Route::resource('/farmers','CTRLfarmers');



});


Route::namespace('App\Http\Controllers\Admin')->middleware('can:admin-access')->group(function(){
    Route::get('/profile-edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile-update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile-destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





// users routes here
Route::namespace('App\Http\Controllers\Users')->prefix('users')->name('users.')->middleware('can:user-access')->group(function(){

    // add routes here for users
    Route::resource('/feedback','CTRLFeedbacks',['except' => ['update','edit','destroy']]);

    Route::get('/myfeedbacks','CTRLFeedbacks@myfeedback')->name('myfeedback');

    // Route::resource('/products','CTRLproducts');

    // eto route ng search products
    Route::get('/searchproducts','CTRLproducts@searchproducts')->name('searchproducts');


});







require __DIR__.'/auth.php';
