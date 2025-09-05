<?php



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





Route::get('/', function () {

    return view('welcome');

});


Route::get('/dashboard', function () {


    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('users','App\Http\Controllers\UserController@index')->middleware(['auth']);

Route::get('/my-profile','App\Http\Controllers\UserController@update_profile')->middleware(['auth']);

route::post('/user_update_profile','App\Http\Controllers\UserController@update_profile_store')->middleware(['auth']);

Route::get('user_add','App\Http\Controllers\UserController@create')->middleware(['auth']);

Route::post('user_store','App\Http\Controllers\UserController@store')->middleware(['auth']);

Route::post('user_edit','App\Http\Controllers\UserController@edit')->middleware(['auth']);

route::post('user_update','App\Http\Controllers\UserController@update')->middleware(['auth']);

route::get('/change-password','App\Http\Controllers\UserController@change_password')->middleware(['auth']);

route::post('/user-change-password','App\Http\Controllers\UserController@change_password_store')->middleware(['auth']);


Route::get('roles','App\Http\Controllers\RoleController@index')->middleware(['auth']);

route::get('role_add','App\Http\Controllers\RoleController@create')->middleware(['auth']);

route::post('role_store','App\Http\Controllers\RoleController@store')->middleware(['auth']);

route::get('role-permissions/{id}','App\Http\Controllers\RoleController@show')->middleware(['auth']);

route::get('role-edit/{id}','App\Http\Controllers\RoleController@edit')->middleware(['auth']);

route::post('role-update','App\Http\Controllers\RoleController@update')->middleware(['auth']);


route::get('permissions','App\Http\Controllers\PermissionController@index')->middleware(['auth']);

Route::get('permission_add','App\Http\Controllers\PermissionController@create')->middleware(['auth']);

Route::post('permission_store','App\Http\Controllers\PermissionController@store')->middleware(['auth']);

route::get('user-forgot-password','App\Http\Controllers\PatientResetPasswordController@index');
route::post('user-change-password','App\Http\Controllers\PatientResetPasswordController@sendlink')->name('user.password.email');
route::get('/user/resetPassword/{_token}','App\Http\Controllers\UserResetPasswordController@changePassword');
route::post('/user/updatepassword', 'App\Http\Controllers\UserResetPasswordController@updatepassword')->name('user.password.update');
require __DIR__.'/auth.php';


Route::get('/roles11','App\Http\Controllers\PermissionController@Permission');

Route::get('user/verify/{token}', 'App\Http\Controllers\UserController@verifyUser');


