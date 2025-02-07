<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\jobController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Company_jobsController;
use App\Http\Controllers\Company_userController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\ApplyFormController;






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

Route::get('/', function() {
    return view('welcome');
    dd();
});

Route::middleware('auth')->group(function () {
    
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
Route::resource('company',CompanyController::class);
Route::get('company', array('as' => 'company.index', 'uses' => 'App\Http\Controllers\CompanyController@index'));
Route::resource('company', 'App\Http\Controllers\CompanyController');
Route::delete('company/{company}', array('as' => 'company.destroy', 'uses' => 
'App\Http\Controllers\CompanyController@destroy'));

Route::get('/companies/search', [CompanyController::class, 'search'])->name('search');

Route::get('/companysearch', function () {
    return view('company.company_jobs');
});



Route::resource('job',jobController::class);
Route::get('job', array('as' => 'job.index', 'uses' => 'App\Http\Controllers\jobController@index'));
Route::resource('job', 'App\Http\Controllers\jobController');
Route::delete('job/{job}', array('as' => 'job.destroy', 'uses' => 
'App\Http\Controllers\jobController@destroy'));
Route::get('/jobs/search', [jobController::class, 'search'])->name('jobs.search');

// Route::resource('jobapply',JobApplicationController::class);


Route::resource('search',SearchController::class);
Route::get('user', array('as' => 'company_user.index', 'uses' => 'App\Http\Controllers\SearchController@index'));

Route::get('/user/search', [SearchController::class, 'search'])->name('user.search');


Route::resource('user',UserController::class);
Route::get('user', array('as' => 'user.index', 'uses' => 'App\Http\Controllers\UserController@index'));
Route::resource('user', 'App\Http\Controllers\UserController');
Route::delete('user/{user}', array('as' => 'user.destroy', 'uses' => 
'App\Http\Controllers\UserController@destroy'));
Route::get('/users/search', [userController::class, 'search'])->name('users.search');

Route::resource('company_jobs',Company_jobsController::class);

Route::resource('apply_forms',ApplyFormController::class);


//For user interface
Route::resource('company_user',Company_userController::class);
Route::get('company_user', array('as' => 'company_user.index', 'uses' => 'App\Http\Controllers\Company_userController@index'));

Route::get('/aboutUs', function () {
    return view('company_user.aboutUs');
});
// Route::get('/company_user/aboutUs',[company_userController::class,'company_user.aboutUs']);

Route::get('/jobapply', function () {
    return view('company_user.jobapply');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

