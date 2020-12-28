<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarousselController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MailController;
use App\Models\About;
use App\Models\Caroussel;
use App\Models\Presentation;
use App\Models\Projects;
use App\Models\Skills;
use App\Models\Contact;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    $datas = Presentation::all(); 
    $projects = Projects::all(); 
    $caroussel = Caroussel::all();
    $about = About::all(); 
    $skills = Skills::all(); 
    $contact = Contact::all(); 
    return view('welcome', compact('datas', 'projects', 'about', 'caroussel', 'skills', 'contact'));
});

Route::resource('/presentation', PresentationController::class)->middleware('auth');;
Route::resource('/projects', ProjectsController::class)->middleware('auth');;
Route::resource('/about-me', AboutController::class)->middleware('auth');; 
Route::resource('/caroussel', CarousselController::class)->middleware('auth');;
Route::resource('/skills', SkillsController::class)->middleware('auth');;
Route::resource('/contact', ContactController::class)->middleware('auth');;
Route::post('/Mail-Sender', [MailController::class, 'store']);

Auth::routes();
Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');



// route adminlte


// Route::get('/projects', function(){
//     return view ('back-office/projectB'); 
// }); 

// Route::get('/about-me', function(){
//     return view ('back-office/about-meB'); 
// }); 

Route::get('/contact', function(){
    return view ('back-office/contactB'); 
}); 
