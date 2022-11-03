<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\InternshipController;
use App\Http\Controllers\Backend\CareerController;
use App\Http\Controllers\Backend\TeamController;
use App\Models\User;
use App\Models\Articalpaymentstore;
use App\Http\Controllers\Frontend\TeamFrontendController;



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

Route::get('/Our-Team-All', function () {
    return view('frontend.ourteampage'); //Our Team All
});

Route::get('/All-CAREERS', function () {
    return view('frontend.careers'); //All Careers
});

Route::get('/trusted-internship', function () {
    return view('frontend.trusted-internship'); //trusted-internship
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
   
/////////////////////////////////////////////////Admin Career\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    
    Route::get('/admin/online-internship', [CareerController::class, 'OnlineInternship'])->name('admin.onlineinternship');
    Route::get('/onlineinternship/delete/{id}', [CareerController::class, 'OnlineInternshipDataDel'])->name('onlineinternship.del');

    Route::get('/admin/offline-internship', [CareerController::class, 'OfflineInternship'])->name('admin.offlineinternship');
    Route::get('/offline-internship/delete/{id}', [CareerController::class, 'OfflineInternshipDataDel'])->name('offlineinternship.del');

    Route::get('/admin/Specialize-internship', [CareerController::class, 'SpecializeInternship'])->name('admin.specializeinternship');
    Route::get('/specalize-internship/delete/{id}', [CareerController::class, 'SpecializeInternshipDataDel'])->name('specializeinternship.del');

    Route::get('/admin/Trusted-internship', [CareerController::class, 'TrustedInternship'])->name('admin.trustedinternship');
    Route::get('/truted-internship/delete/{id}', [CareerController::class, 'TrustedInternshipDataDel'])->name('trustedinternship.del');


    /////////////////////////////////////////////Vacency\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    Route::prefix('vacancy')->group(function(){
        Route::get('/post', [CareerController::class, 'VacancyView'])->name('vacnacy.view');
        Route::post('/store', [CareerController::class, 'VacancyStore'])->name('vacnacy.store');
        Route::get('/posted', [CareerController::class, 'PostedVacancy'])->name('vacnacy.posted');
        Route::get('/delete/{id}', [CareerController::class, 'DeleteVacancy'])->name('vacancy.delete');
        Route::get('/job-applicants', [CareerController::class, 'JobApplicants'])->name('job.applicants');

   
    });
    /////////////////////////////////////////////View Vacacny On Frontend\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    Route::get('/vacancy', [InternshipController::class, 'VacancyViewOnFrontEnd']);

/////////////////////////////////////////////////Full Team Operation\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ 
   
   Route::prefix('Team')->group(function(){
        Route::get('/view', [TeamController::class, 'PartnerView'])->name('partner.view');
        Route::get('/add', [TeamController::class, 'PartnerAdd'])->name('partner.add');
        Route::post('/store', [TeamController::class, 'PartnerStore'])->name('partner.store');
        Route::get('/team/delete/{id}', [TeamController::class, 'DeletePartner'])->name('partner.delete');

        Route::get('/associates/view', [TeamController::class, 'AssociatesView'])->name('associates.view');
        Route::get('/asscoiates/add', [TeamController::class, 'AssociatesAdd'])->name('associates.add');  
        Route::post('/associates/store', [TeamController::class, 'AssociatesStore'])->name('associate.store');  
        Route::get('/associates/delete/{id}', [TeamController::class, 'DeleteAssociates'])->name('associates.delete'); 

        Route::get('/hr-admin/view', [TeamController::class, 'HrAdminView'])->name('hradmin.view');
        Route::get('/hr-admin/add', [TeamController::class, 'HrAdminAdd'])->name('hradmin.add');  
        Route::post('/hr-admin/store', [TeamController::class, 'HrAdminStore'])->name('hradmin.store');  
        Route::get('/hr-admin/delete/{id}', [TeamController::class, 'DeleteHrAdmin'])->name('hradmin.delete');  

        Route::get('/office-assistant/view', [TeamController::class, 'OfficeAssView'])->name('officeass.view');
        Route::get('/office-assistant/add', [TeamController::class, 'OfficeAssAdd'])->name('officeass.add');  
        Route::post('/office-assistant/store', [TeamController::class, 'OfficeAssStore'])->name('officeass.store');  
        Route::get('/office-assistant/delete/{id}', [TeamController::class, 'DeleteOfficeAss'])->name('officeass.delete');    
    });

   Route::get('/trusted-partner', [TeamFrontendController::class, 'PartnerFrontView'])->name('partner.front.view');
   Route::get('/our-associates', [TeamFrontendController::class, 'AssociatesFrontView'])->name('associates.front.view');
   Route::get('/hr-admin', [TeamFrontendController::class, 'HrAdminFrontView'])->name('hradmin.front.view');
   Route::get('/office-assistant', [TeamFrontendController::class, 'OfficeAssistantFrontView'])->name('officeass.front.view');


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
Route::post('/vacancy', [IndexController::class, 'VacacnyPage'])->name('view.vacancy');



Route::prefix('internship')->group(function(){
      Route::get('/online-internship', [InternshipController::class, 'OnlineInternship'])->name('online.internship');
      Route::post('/submit-online-internship', [InternshipController::class, 'OnlineInternshipStore'])->name('online.internship.store');
      
      Route::get('/offline-internship', [InternshipController::class, 'OfflineInternship'])->name('offline.internship');
      Route::post('/submit-offline-internship', [InternshipController::class, 'OfflineInternshipStore'])->name('offline.internship.store');
      
      Route::get('/Specialize-internship', [InternshipController::class, 'SpecializeInternship'])->name('specialize.internship');
      Route::post('/submit-specialize-internship', [InternshipController::class, 'SpecializeInternshipStore'])->name('specialize.internship.store');

      Route::get('/Trusted-internship', [InternshipController::class, 'TrustedInternshipView'])->name('trusted.internship');
      Route::post('/submit-trusted-internship', [InternshipController::class, 'TrustedInternshipStore'])->name('trusted.internship.store');

      Route::post('/job', [InternshipController::class, 'SubmitJobApplicant'])->name('job.application.store');
});

Route::prefix('publish-your-article')->group(function(){
    Route::get('/view-artical-payment', [InternshipController::class, 'ViewArticalPayment'])->name('view.artical.payment');
    Route::post('/artical-payment-store', [InternshipController::class, 'ArticalPaymentStore'])->name('artical.payment.store');
    Route::get('/submit-article-view', [InternshipController::class, 'SubmitArticleView'])->name('view.artical.submit');
});























