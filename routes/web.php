<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\InternshipController;
use App\Models\User;


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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/Divorce-Matrimonial-Matter', function () {
    return view('frontend.matrimonial'); //Divorce-Matrimonial-Matter
});

Route::get('/Criminal-Matter', function () {
    return view('frontend.criminal'); //Criminal Matter
});

Route::get('/Service-Matter', function () {
    return view('frontend.service-law'); //Service Matter
});

Route::get('/Civil-Matter', function () {
    return view('frontend.civil'); //Civil Matter
});

Route::get('/Property-Law', function () {
    return view('frontend.property'); //Civil Matter
});

Route::get('/About-Us', function () {
    return view('frontend.about'); //About
});

Route::get('/TRUSTED-PARTNERS', function () {
    return view('frontend.partner'); //TRUSTED PARTNERS
});

Route::get('/Our-Team', function () {
    return view('frontend.advocate'); //Our Core Team
});

Route::get('/HR-Administration', function () {
    return view('frontend.administration'); //HR & Administration
});

Route::get('/Office-Assistant', function () {
    return view('frontend.assistant'); //Office Assistant
});

Route::get('/Our-Team-All', function () {
    return view('frontend.ourteampage'); //Our Team All
});

Route::get('/All-CAREERS', function () {
    return view('frontend.careers'); //All Careers
});

Route::get('/trusted-internship', function () {
    return view('frontend.trusted-internship'); //trusted-internship
});

Route::get('/vacancy', function () {
    return view('frontend.vacancy'); //vacancy
});

Route::get('/Book-Publication', function () {
    return view('frontend.book-publication'); //Book-Publication
});

Route::get('/Publication', function () {
    return view('frontend.publication'); //Publication
});

Route::get('/Coming-soon', function () {
    $id = Auth::user()->id;
    $user = User::find($id);
    return view('intern.coming-soon',compact('user')); //Coming Soon
});


Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

//ADMIN ALL ROUTES
    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
    Route::get('/admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');


//USER ALL ROUTES
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    $id = Auth::user()->id;
    $user = User::find($id);
    return view('dashboard',compact('user'));
})->name('dashboard');

Route::get('/', [IndexController::class, 'index']);
Route::get('/user/logout', [IndexController::class, 'UserLogout'])->name('user.logout');
Route::get('/user/profile', [IndexController::class, 'UserProfile'])->name('user.profile');
Route::post('/user/profile/store', [IndexController::class, 'UserProfileStore'])->name('user.profile.store');
Route::get('/user/change/password', [IndexController::class, 'UserChangePassword'])->name('intern.change.password');
Route::post('/user/password/update', [IndexController::class, 'UserPasswordUpdate'])->name('user.password.update');



Route::prefix('internship')->group(function(){
      Route::get('/online-internship', [InternshipController::class, 'OnlineInternship'])->name('online.internship');
      Route::post('/submit-online-internship', [InternshipController::class, 'OnlineInternshipStore'])->name('online.internship.store');
      
      Route::get('/offline-internship', [InternshipController::class, 'OfflineInternship'])->name('offline.internship');
      Route::post('/submit-offline-internship', [InternshipController::class, 'OfflineInternshipStore'])->name('offline.internship.store');
      
      Route::get('/Specialize-internship', [InternshipController::class, 'SpecializeInternship'])->name('specialize.internship');
      Route::post('/submit-specialize-internship', [InternshipController::class, 'SpecializeInternshipStore'])->name('specialize.internship.store');

      Route::get('/Trusted-internship', [InternshipController::class, 'TrustedInternshipView'])->name('trusted.internship');
      Route::post('/submit-trusted-internship', [InternshipController::class, 'TrustedInternshipStore'])->name('trusted.internship.store');
});





























