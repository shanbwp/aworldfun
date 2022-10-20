<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FrontController; 
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\SettingController; 
use App\Http\Controllers\TestimonialController; 
use App\Http\Controllers\CareerController; 
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GamedetailController;

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
// Front Routs
// Route::get('/', [FrontController::class, 'Home'])->name('front');
Route::get("ads.txt" , function () {
  return \Illuminate\Support\Facades\Redirect::to('ads.txt');
   });
   
   Route::get("sitemap.xml" , function () {
     return \Illuminate\Support\Facades\Redirect::to('sitemap.xml');
   });
 Route::get('/', [FrontController::class, 'Home'])->name('home');
Route::get('/about', [FrontController::class, 'About'])->name('about');  
Route::get('/game-detail/{id}', [FrontController::class, 'gameDetail'])->name('game-detail');
Route::get('/category-game/{id}', [FrontController::class, 'categoryGame'])->name('category-game');  
Route::get('/blog', [FrontController::class, 'Blog'])->name('blog');
Route::get('/blog-detail/{id}', [FrontController::class, 'blogDetail'])->name('blog-detail'); 
Route::get('/contact', [FrontController::class, 'Contact'])->name('contact'); 
Route::get('/privacy-policy', [FrontController::class, 'privacyPolicy'])->name('privacypolicy');
Route::get('/terms-conditions', [FrontController::class, 'termConditions'])->name('termconditions');
Route::post('/front-contact-store', [ContactController::class, 'store'])->name('front-contact-store');
Route::post('/front-subscriber-store', [SubscriberController::class, 'store'])->name('front-subscriber-store');
Route::post('/front-career-store', [CareerController::class, 'store'])->name('front-career-store');

Route::prefix('admin')->group(function () {
    //login Routes
    Route::get('/', [LoginController::class, 'newlogin'])->name('admin-login');
    Route::post('/store-login', [LoginController::class, 'login'])->name('store-login');
    Route::post('/newForget', [LoginController::class, 'login'])->name('newForget');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    //Admin Dashboard
    //User Routes:
    Route::group(['middleware' => 'isAdmin'], function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin');

        Route::get('/user-list', [UserController::class, 'index'])->name('user-list');
        Route::get('user-create', [UserController::class, 'create'])->name('user-create');
        Route::post('user-store', [UserController::class, 'store'])->name('user-store');
        Route::get('/user-edit/{id}', [UserController::class, 'edit'])->name('user-edit');
        Route::post('/user-update/{id}', [UserController::class, 'update'])->name('user-update');
        Route::get('/user-delete/{id}', [UserController::class, 'destroy'])->name('user-delete');
        Route::get('/user-detail/{id}', [UserController::class, 'Detail'])->name('user-detail');
        Route::get('/admin-user-track-list/{id}', [UserController::class, 'track'])->name('admin-user-track-list');
        Route::get('/admin-user-album-list/{id}', [UserController::class, 'album'])->name('admin-user-album-list');

        

        //Route::get('/contact', [ContactController::class, 'ContactUser'])->name('contact'); 
        Route::get('/contact-list', [ContactController::class, 'index'])->name('contact-list');
        Route::get('/contact-create', [ContactController::class, 'create'])->name('contact-create');
        Route::post('/contact-store', [ContactController::class, 'store'])->name('contact-store');
        Route::get('/contact-edit/{id}', [ContactController::class, 'edit'])->name('contact-edit');
        Route::post('/contact-update/{id}', [ContactController::class, 'update'])->name('contact-update');
        Route::get('/contact-delete/{id}', [ContactController::class, 'destroy'])->name('contact-delete');

       

        Route::get('/game-list', [GamedetailController::class, 'index'])->name('game-list');
        Route::get('/game-create', [GamedetailController::class, 'create'])->name('game-create');
        Route::post('/game-store', [GamedetailController::class, 'store'])->name('game-store');
        Route::get('/game-edit/{id}', [GamedetailController::class, 'edit'])->name('game-edit');
        Route::post('/game-update/{id}', [GamedetailController::class, 'update'])->name('game-update');
        Route::get('/game-delete/{id}', [GamedetailController::class, 'destroy'])->name('game-delete');
     
      Route::get('/category-list', [CategoryController::class, 'index'])->name('category-list');
      Route::get('/category-create', [CategoryController::class, 'create'])->name('category-create');
      Route::post('/category-store', [CategoryController::class, 'store'])->name('category-store');
      Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('category-edit');
      Route::post('/category-update/{id}', [CategoryController::class, 'update'])->name('category-update');
      Route::get('/category-delete/{id}', [CategoryController::class, 'destroy'])->name('category-delete');


        Route::get('/testimonial-list', [TestimonialController::class, 'index'])->name('testimonial-list');
        Route::get('/testimonial-create', [TestimonialController::class, 'create'])->name('testimonial-create');
        Route::post('/testimonial-store', [TestimonialController::class, 'store'])->name('testimonial-store');
        Route::get('/testimonial-edit/{id}', [TestimonialController::class, 'edit'])->name('testimonial-edit');
        Route::post('/testimonial-update/{id}', [TestimonialController::class, 'update'])->name('testimonial-update');
        Route::get('/testimonial-delete/{id}', [TestimonialController::class, 'destroy'])->name('testimonial-delete');
        Route::get('/testimonial', [TestimonialController::class, 'Testimonial'])->name('testimonial');

    

        Route::get('/slider-list', [SliderController::class, 'index'])->name('slider-list');
        Route::get('slider-create', [SliderController::class, 'create'])->name('slider-create');
        Route::post('slider-store', [SliderController::class, 'store'])->name('slider-store');
        Route::get('/slider-edit/{id}', [SliderController::class, 'edit'])->name('slider-edit');
        Route::post('/slider-update/{id}', [SliderController::class, 'update'])->name('slider-update');
        Route::get('/slider-delete/{id}', [SliderController::class, 'destroy'])->name('slider-delete');
        Route::get('/front', [SliderController::class, 'frontslide'])->name('front');

        
      
        Route::get('/blog-list', [BlogController::class, 'index'])->name('blog-list');
        Route::get('/blog-create', [BlogController::class, 'create'])->name('blog-create');
        Route::post('/blog-store', [BlogController::class, 'store'])->name('blog-store');
        Route::get('/blog-edit/{id}', [BlogController::class, 'edit'])->name('blog-edit');
        Route::post('/blog-update/{id}', [BlogController::class, 'update'])->name('blog-update');
        Route::get('/blog-delete/{id}', [BlogController::class, 'destroy'])->name('blog-delete');
        Route::get('/userbolg', [BlogController::class, 'userBlog'])->name('userbolg');


        Route::get('/subscriber-list', [SubscriberController::class, 'index'])->name('subscriber-list');
        Route::get('/subscriber-create', [SubscriberController::class, 'create'])->name('subscriber-create');
        Route::post('/subscriber-store', [SubscriberController::class, 'store'])->name('subscriber-store');
        Route::get('/subscriber-edit/{id}', [SubscriberController::class, 'edit'])->name('subscriber-edit');
        Route::post('/subscriber-update/{id}', [SubscriberController::class, 'update'])->name('subscriber-update');
        Route::get('/subscriber-delete/{id}', [SubscriberController::class, 'destroy'])->name('subscriber-delete');
        Route::get('/subscriber', [SubscriberController::class, 'Subscriber'])->name('subscriber');

        
        Route::get('/testg', [FrontController::class, 'testg'])->name('testg');

        // setting
        Route::get('/setting-logo-edit', [SettingController::class, 'edit'])->name('setting-logo-edit');
        Route::post('/setting-logo-update', [SettingController::class, 'update'])->name('setting-logo-update');
        Route::get('/setting-social-link-edit', [SettingController::class, 'socialEdit'])->name('setting-social-link-edit');
        Route::post('/setting-social-link-update/{id}', [SettingController::class, 'socialUpdate'])->name('setting-social-link-update');
        Route::get('/setting-footer-edit', [SettingController::class, 'footerEdit'])->name('setting-footer-edit');
        Route::post('/setting-footer-update', [SettingController::class, 'footerUpdate'])->name('setting-footer-update');
        Route::get('/setting-seo-edit', [SettingController::class, 'SEO'])->name('setting-seo-edit');
        Route::post('/setting-seo-update', [SettingController::class, 'SEOupdate'])->name('setting-seo-update');

});
});
        
     
