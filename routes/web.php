<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DetailController; 
use App\Http\Controllers\PdfController; 
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\UserPropertyController;
use App\Http\Controllers\UserInvestmentsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Api\ApiController;





Route::get('/front', function () {
    return view('front.multiple_image');
});


Route::POST('/check-email', [RegisterController::class,'checkEmail'])->name('check-email');
Route::get('/reset_password', [RegisterController::class,'resetPassword'])->name('reset.password');





// admin 

    Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Account
    Route::get('/user', [UserController::class, 'index'])->name('admin.user.index');
    Route::post('/user/tabledata', [UserController::class, 'tabledata'])->name('admin.user.tabledata');


    Route::get('/account/{id}', [UserController::class, 'edit'])->name('admin.account');
    Route::post('/account/{id}', [UserController::class, 'update'])->name('admin.account.update');
 


    // Tinymce image upload handler
    Route::post('/handleeditoruploads', [EditorUploadsController::class, 'upload'])->name('admin.editoruploads.upload');

//property
    Route::get('/property', [PropertyController::class, 'index'])->name('admin.property.index');
    Route::post('/property/tabledata', [PropertyController::class, 'tabledata'])->name('admin.property.tabledata');
    Route::get('/property/add-property', [PropertyController::class, 'create'])->name('admin.property.create');
    Route::post('/property/store', [PropertyController::class, 'store'])->name('admin.property.store');
    Route::get('/property/update-property/{id}', [PropertyController::class, 'edit'])->name('admin.property.edit');
    Route::post('/property/update-property/{id}', [PropertyController::class, 'update'])->name('admin.property.update');
    Route::delete('/property/delete/{id}', [PropertyController::class, 'destroy'])->name('admin.property.destroy');

    Route::post('/delete-image', [PropertyController::class, 'deleteImage'])->name('delete-image');

 

    Route::get('/property/pool/{id}', [PropertyController::class, 'property_pool'])->name('admin.property.pool');
    Route::POST('/property/pool/datatable/{id}', [PropertyController::class, 'pool_tabledata'])->name('admin.property.pool_datatable');

    Route::get('/property/detail/{id}',[PropertyController::class, 'property_detail'])->name('admin.property.detail');
    Route::post('/property/update_status/{id}/{status}',[PropertyController::class, 'property_status'])->name('admin.property.status');
    Route::get('/property/view_bid/{id}',[PropertyController::class, 'view_bid'])->name('admin.property.view_bid');
    
 

    Route::get('/property/review/{id}', [PropertyController::class, 'property_review'])->name('admin.property.review');
    




    // user Dashboard

   

    


});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// user register 
Route::POST('/register', [RegisterController::class, 'register'])->name('email.register');
Route::get('/social-register', [RegisterController::class, 'social_register'])->name('social.register');


Route::get('/social_investment1', [UserDashboardController::class, 'social_investment1']);
Route::post('/social_investment1', [UserDashboardController::class, 'social_investment_store'])->name('social.investment'); 


// Socialite

Route::get('register/gooogle',[App\Http\Controllers\Auth\RegisterController::class,'redirectToGoogle'])->name('register.google');
Route::get('register/google/callback',[App\Http\Controllers\Auth\RegisterController::class,'handleGoogleCallback']);


Route::get('register/facebook',[App\Http\Controllers\Auth\RegisterController::class,'redirectToFacebook'])->name('register.facebook');
Route::get('register/facebook/callback',[App\Http\Controllers\Auth\RegisterController::class,'handleFacebookCallback']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// front
Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/property', [FrontController::class, 'property'])->name('front.property');
// detail 
Route::get('/detail/{id}', [DetailController::class, 'detail']);
Route::POST('/review_property', [DetailController::class, 'review'])->name('property.review');

// contract
Route::get('/contract-form', [PdfController::class, 'index']);
Route::post('/contract-form', [PdfController::class, 'contract']);


//search
Route::get('/search_property',[SearchController::class,'search'])->name('property.search');
Route::POST('/search_property',[SearchController::class,'filter'])->name('property.filter');


Route::get('/termsandcondition',[FrontController::class,'terms_condition']);
Route::get('/privacy_policy',[FrontController::class,'privacy_policy']);
Route::get('/db_delete', function () {
    return view('front.db_delete');
});









// user dashboard 
Route::get('/profile', [UserDashboardController::class, 'profile']);


Route::get('/dashboard', [UserDashboardController::class, 'dashboard']);
Route::get('/dashboard/property/detail/{id}', [UserDashboardController::class, 'property_detail'])->name('dashboard.property.detail');
 
// Update Investment 
Route::post('/update_investment', [UserDashboardController::class, 'update_investment'])->name('user.update_investment');


// my properties 
Route::get('/reviewed_properties', [UserPropertyController::class, 'reviewed_properties'])->name('user.reviewed_properties');
Route::get('/pool_detail/{id}',[UserPropertyController::class, 'pool_detail'])->name('user.pool_detail');
Route::post('/detail/action/{id}',[UserPropertyController::class, 'property_action'])->name('pool_detail.action');   

Route::get('/invested_properties',[UserInvestmentsController::class, 'invested_properties'])->name('user.invested_properties');




Route::get('/search_properties',[UserDashboardController::class, 'searchproperties'])->name('user.searchproperties');






Route::get('/front', [frontController::class,'front']);

