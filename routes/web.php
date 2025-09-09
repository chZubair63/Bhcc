<?php

// use App\Http\Controllers\API\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\CorevaluesController;
use App\Http\Controllers\IndextopController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ManagingpartnersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\IndexendController;
use App\Http\Controllers\QualifieddoctorController;
use App\Http\Controllers\FounderController;
use App\Http\Controllers\CompletemedicalController;

// Route::get('/', function () {

//     return view('welcome');

// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('users', 'App\Http\Controllers\UserController@index')->middleware(['auth']);
Route::get('/my-profile', 'App\Http\Controllers\UserController@update_profile')->middleware(['auth']);
route::post('/user_update_profile', 'App\Http\Controllers\UserController@update_profile_store')->middleware(['auth']);
Route::get('user_add', 'App\Http\Controllers\UserController@create')->middleware(['auth']);
Route::post('user_store', 'App\Http\Controllers\UserController@store')->middleware(['auth']);
Route::post('user_edit', 'App\Http\Controllers\UserController@edit')->middleware(['auth']);
route::post('user_update', 'App\Http\Controllers\UserController@update')->middleware(['auth']);
route::get('/change-password', 'App\Http\Controllers\UserController@change_password')->middleware(['auth']);
route::post('/user-change-password', 'App\Http\Controllers\UserController@change_password_store')->middleware(['auth']);
Route::get('roles', 'App\Http\Controllers\RoleController@index')->middleware(['auth']);
route::get('role_add', 'App\Http\Controllers\RoleController@create')->middleware(['auth']);
route::post('role_store', 'App\Http\Controllers\RoleController@store')->middleware(['auth']);
route::get('role-permissions/{id}', 'App\Http\Controllers\RoleController@show')->middleware(['auth']);
route::get('role-edit/{id}', 'App\Http\Controllers\RoleController@edit')->middleware(['auth']);
route::post('role-update', 'App\Http\Controllers\RoleController@update')->middleware(['auth']);
route::get('permissions', 'App\Http\Controllers\PermissionController@index')->middleware(['auth']);
Route::get('permission_add', 'App\Http\Controllers\PermissionController@create')->middleware(['auth']);
Route::post('permission_store', 'App\Http\Controllers\PermissionController@store')->middleware(['auth']);
route::get('user-forgot-password', 'App\Http\Controllers\PatientResetPasswordController@index');
route::post('user-change-password', 'App\Http\Controllers\PatientResetPasswordController@sendlink')->name('user.password.email');
route::get('/user/resetPassword/{_token}', 'App\Http\Controllers\UserResetPasswordController@changePassword');
route::post('/user/updatepassword', 'App\Http\Controllers\UserResetPasswordController@updatepassword')->name('user.password.update');
require __DIR__ . '/auth.php';


Route::get('/roles11', 'App\Http\Controllers\PermissionController@Permission');
Route::get('user/verify/{token}', 'App\Http\Controllers\UserController@verifyUser');



// Route::get('/', function () {return view('welcome');});
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'index'])->name('front.index');

use App\Http\Controllers\CareersController;

Route::get('/careers-list', [CareersController::class, 'index'])->name('admin.careers.index');
Route::get('careers/create', [CareersController::class, 'create'])->name('admin.careers.create');
Route::post('careers/store', [CareersController::class, 'store'])->name('careers.store');
Route::get('careers/{career}', [CareersController::class, 'show'])->name('careers.show');
Route::get('careers/{career}/edit', [CareersController::class, 'edit'])->name('admin.careers.edit');
Route::put('careers/{career}', [CareersController::class, 'update'])->name('admin.careers.update');
Route::delete('careers/{career}', [CareersController::class, 'destroy'])->name('admin.careers.destroy');
Route::post('jobApplication', [CareersController::class, 'ApplicationStore'])->name('careerApplication.store');
Route::get('admin/job_applications/{id}', [CareersController::class, 'JobAppliedApplications'])->name('admin.careers.applications');
Route::post('/update_cv_status', [CareersController::class, 'CVStatusUpdate']);
Route::post('/download_career_cv', [CareersController::class, 'DownloadCareerCv']);
Route::post('/career/update-status', [CareersController::class, 'updateStatus'])->name('career.updateStatus');


use App\Http\Controllers\TenderController;

Route::get('/tender-list', [TenderController::class, 'index'])->name('admin.tender.index');
Route::get('/tender/create', [TenderController::class, 'create'])->name('admin.tender.create');
Route::post('/tender', [TenderController::class, 'store'])->name('admin.tender.store');
Route::get('/tender/{tender}/edit', [TenderController::class, 'edit'])->name('admin.tender.edit');
Route::put('/tender/{tender}', [TenderController::class, 'update'])->name('admin.tender.update');
Route::delete('/tender/{tender}', [TenderController::class, 'destroy'])->name('admin.tender.destroy');
Route::get('job_applications/{id}', [TenderController::class, 'TenderAppliedApplications'])->name('admin.tender.applications');
Route::post('/job-application', [TenderController::class, 'jobApplicationStore'])->name('jobApplication.store');
Route::post('update_cv_status', [TenderController::class, 'UpdateCVStatus']);
Route::post('/download-cvs', [TenderController::class, 'downloadCVs'])->name('download.cvs');

use App\Http\Controllers\BlogsController;

Route::get('/blogs', [BlogsController::class, 'index'])->name('admin.blogs.index');
Route::get('/blogs/create', [BlogsController::class, 'create'])->name('admin.blogs.create');
Route::post('/blogs/store', [BlogsController::class, 'store'])->name('admin.blogs.store');
Route::get('/blogs/{blogs}', [BlogsController::class, 'show'])->name('admin.blogs.show');
Route::get('/blogs/{blogs}/edit', [BlogsController::class, 'edit'])->name('admin.blogs.edit');
Route::put('/blogs/{blogs}', [BlogsController::class, 'update'])->name('admin.blogs.update');
Route::delete('/blogs/{blogs}', [BlogsController::class, 'destroy'])->name('admin.blogs.destroy');
