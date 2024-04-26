<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CaseStudyController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicedeatilController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

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


Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/redirect' , [HomeController::class , 'redirect'])->name('redirect');
Route::get('/blog',[HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}' , [HomeController::class , 'blog_detail'])->name('blog.detail');
Route::get('/case-studies',[HomeController::class , 'casestudy'])->name('casestudy');
Route::get('/case-studies/{slug}' , [HomeController::class, 'casestudy_detail'])->name('casestudy.detail');
Route::get('/contact' , [HomeController::class , 'contact_us'])->name('contact');
Route::post('/contact/mail' , [HomeController::class, 'contact_us_mail_send'])->name('contact.mail.send');
// Route::get('about-us' , [HomeController::class , 'aboutus'])->name('about-us');
// Route::get('service/{slug}',[HomeController::class , 'services'])->name('service');

// Route::get('service-details/{slug}' , [HomeController::class , 'service_detail'])->name('service-details');
// Route::get('pricing',[HomeController::class , 'pricing'])->name('pricing');
// Route::get('faq' , [HomeController::class , 'faq'])->name('faq');


//Admin routes starts here
Route::prefix('/admins')->middleware(['admin', 'auth'])->group(function () {
    Route::get('/', [AdminController::class , 'index'])->name('admin.index');
    // Route::resource('team' , TeamController::class);
    Route::resource('blog' , BlogController::class);
    Route::resource('case_study', CaseStudyController::class);
    Route::get('profile', [ProfileController::class , 'show'])->name('profile');
    Route::put('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    // this route is for texteditor image upload
    // Route::post('/upload' , [ProjectController::class , 'upload'])->name('ckeditor.upload');

});

// Route::get('/contact', function () {
//     return view('frontend.pages.contact');
// })->name('contact');

Route::get('/pricing', function () {
    return view('frontend.pages.pricing');
})->name('pricing');

Route::get('/reviews-junction', function () {
    return view('frontend.pages.reviews-junction');
})->name('rj');

Route::get('/rj-loyalty', function () {
    return view('frontend.pages.rj-loyalty');
})->name('rj-loyalty');

Route::get('/loyalty-pricing', function () {
    return view('frontend.pages.loyalty-pricing');
})->name('loyalty-pricing');

Route::get('/why-rj', function () {
    return view('frontend.pages.why-rj');
})->name('why-rj');

Route::get('/reviews-junction-pricing', function () {
    return view('frontend.pages.reviews-junction-pricing');
})->name('reviews-junction-pricing');

Route::get('/integration', function () {
    return view('frontend.pages.integration');
})->name('integration');

Route::get('/our-apps', function () {
    return view('frontend.pages.ourapps');
})->name('ourapps');

Route::get('/product-reviews', function () {
    return view('frontend.pages.product-reviews');
})->name('product-reviews');


Route::get('/privacy-policy', function () {
    return view('frontend.pages.privacy-policy');
})->name('privacy');

Route::get('/platform', function () {
    return view('frontend.pages.platform');
})->name('platform');

Route::get('/sms-marketing', function () {
    return view('frontend.pages.sms');
})->name('sms');

Route::get('/customer-success', function () {
    return view('frontend.pages.customer-success');
})->name('customer-success');


// Route::get('/case-studies-details', function () {
//     return view('frontend.pages.casestudy-detail');
// })->name('casestudydetail');



// Route::get('/blog-detail', function () {
//     return view('frontend.pages.blogdetail');
// })->name('blogdetail');
