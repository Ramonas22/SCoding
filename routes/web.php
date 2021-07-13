<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceList;
use App\Http\Controllers\InsertDevice;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Maps;



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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//This route establishes connection between DeviceList controller and home page.
//it passes function show from controller to home page which passes Devices table from database.
Route::get('home', [DeviceList::class,'show'])->middleware('auth');

//This route establishes connection between InsertDevice controller and home page.
//it passes function save to the event addDevice.
//This functions allows to request data for table Devices in database.
Route::post('addDevice',[InsertDevice::class,'save'])->name('InsertDevice@save');

//This route redirects user after the event addDevice was activated to home page.
Route::view('addDevice','home')->middleware('auth');

//This route redirects user after an event LoadMapHere was activated.
Route::get('LoadMapHere', [Maps::class,'LoadMap'])->name('Maps@LoadMap');


/* Disable register page and redirect register to login*/ 
 Route::get('/register', function() {
    return redirect('/login');
});

Route::post('/register', function() {
    return redirect('/login');
}); 


//Routes for Email
Route::get('/send-email', [MailController::class,'sendMail']);