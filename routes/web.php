<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\OrganizersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


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
    return view('frontend/welcome');
});
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact',[ContactController::class, 'contact'])->name('contact');
Route::get('/archive',[ArchiveController::class, 'archive'])->name('archive');
Route::get('/organizers',[OrganizersController::class, 'organizers'])->name('organizers');
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::get('/register',[RegisterController::class, 'register'])->name('register');

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'kn'])) {
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    return redirect()->back();
})->name('switchLanguage');
