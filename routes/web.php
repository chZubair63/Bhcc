<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;




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
route::post('/user/updatepassword','App\Http\Controllers\UserResetPasswordController@updatepassword')->name('user.password.update');
Route::resource('schedules', ScheduleController::class);




require __DIR__.'/auth.php';








Route::get('/roles11','App\Http\Controllers\PermissionController@Permission');





Route::get('user/verify/{token}', 'App\Http\Controllers\UserController@verifyUser');









use App\Http\Controllers\DepartmentController;

// Departments Routes

// Additional Named Routes (if needed)
Route::get('departments', [DepartmentController::class, 'index'])->name('departments.index');
Route::resource('departments', DepartmentController::class);

Route::get('departments-create', [DepartmentController::class, 'create'])->name('departments.create');
Route::post('departments-store', [DepartmentController::class, 'store'])->name('departments.store');
Route::get('departments-edit/{id}', [DepartmentController::class, 'edit'])->name('departments.edit');
Route::put('departments-update/{id}', [DepartmentController::class, 'update'])->name('departments.update');
Route::delete('departments-delete/{id}', [DepartmentController::class, 'destroy'])->name('departments.destroy');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('indexpage')->name('indexpage.')->group(function () {
        Route::resource('departments', DepartmentController::class);
    });
});
Route::resource('schedules', ScheduleController::class);

Route::get('schedules', [ScheduleController::class, 'index'])->name('admin.indexpage.schedules.index');
Route::get('schedule-create', [ScheduleController::class, 'create'])->name('schedule.create');
Route::post('schedule-store', [ScheduleController::class, 'store'])->name('schedule.store');
Route::get('schedule-edit/{id}', [ScheduleController::class, 'edit'])->name('schedule.edit');
Route::put('schedule-update/{id}', [ScheduleController::class, 'update'])->name('schedule.update');


use App\Http\Controllers\ServicesController;

Route::get('services', [ServicesController::class, 'index'])->name('admin.indexpage.servicess.index');
Route::get('services-create', [ServicesController::class, 'create'])->name('services.create');

Route::post('services-store', [ServicesController::class, 'store'])->name('services.store');
Route::get('services-edit/{id}', [ServicesController::class, 'edit'])->name('services.edit');
Route::put('services-update/{id}', [ServicesController::class, 'update'])->name('services.update');





use App\Http\Controllers\SliderController;

Route::get('slider', [SliderController::class, 'index'])->name('admin.indexpage.slider.index');

Route::get('slider-create', [SliderController::class, 'create'])->name('slider.create');
Route::post('sliders/store', [SliderController::class, 'store'])->name('slider.store');
Route::get('slider-edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
Route::put('sliders-update/{id}', [SliderController::class, 'update'])->name('slider.update');


use App\Http\Controllers\FounderController;

Route::get('founder', [FounderController::class, 'index'])->name('founders.index');
Route::get('founder-create', [FounderController::class, 'create'])->name('founder.create');

// Route to handle the form submission to store a new founder
Route::post('founder', [FounderController::class, 'store'])->name('founder.store');

// Route to show the form for editing an existing founder
Route::get('founder-edit/{id}', [FounderController::class, 'edit'])->name('founder.edit');

// Route to handle the form submission to update an existing founder
Route::put('founder-update/{id}', [FounderController::class, 'update'])->name('founder.update');

