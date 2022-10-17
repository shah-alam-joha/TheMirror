<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PagesController as FrontendPagesController;

// use App\Http\Controllers\Frontend\ServicesController as FrontendServicesController;
// use App\Http\Controllers\Frontend\TeamsController as FrontendTeamsController;

// backend controller
use App\Http\Controllers\Backend\PagesController as BackendPagesController;
use App\Http\Controllers\Backend\SlidersController;
use App\Http\Controllers\Backend\BrandsController;
use App\Http\Controllers\Backend\TeamsController as BackendTeamsController;
use App\Http\Controllers\Backend\ServicesController as BackendServicesController;
use App\Http\Controllers\Backend\ReviewsController;
use App\Http\Controllers\Backend\BeautyServicesController;
use App\Http\Controllers\Backend\AboutUsController;
use App\Http\Controllers\Backend\TeamsController;
use App\Http\Controllers\Backend\GalleriesController;
use App\Http\Controllers\Backend\FaqsController;
use App\Http\Controllers\Backend\ContactsController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [ FrontendPagesController::class, 'index'])->name('index');
Route::get('/contact', [ FrontendPagesController::class, 'contact'])->name('contact');
Route::get('/service', [ FrontendPagesController::class, 'service'])->name('service');
Route::get('/about', [ FrontendPagesController::class, 'about'])->name('about');
Route::get('/offer', [ FrontendPagesController::class, 'offer'])->name('offer');
Route::get('/team', [ FrontendPagesController::class, 'team'])->name('team');
Route::get('/shop', [ FrontendPagesController::class, 'shop'])->name('shop');
Route::get('/faq', [ FrontendPagesController::class, 'faq'])->name('faq');

Route::get('/test', [ FrontendPagesController::class, 'test'])->name('test');


//admin routes
Route::group(['prefix' => 'admin'], function(){
	Route::get('/', [ BackendPagesController::class, 'index'])->name('admin.index');


//Sliders routes
	Route::group(['prefix' => '/sliders'], function(){
		Route::get('/', [ SlidersController::class, 'index'])->name('admin.sliders');
		Route::get('/create', [ SlidersController::class, 'create'])->name('admin.slider.create');
		Route::get('/edit/{id}', [ SlidersController::class, 'edit'])->name('admin.slider.edit');
		Route::post('/store', [ SlidersController::class, 'store'])->name('admin.slider.store');
		Route::post('/slider/edit/{id}', [ SlidersController::class, 'update'])->name('admin.slider.update');
		Route::post('/slider/delete/{id}', [ SlidersController::class, 'delete'])->name('admin.slider.delete');
	});

//Brands routes
	Route::group(['prefix' => '/brands'], function(){
		Route::get('/', [ BrandsController::class, 'index'])->name('admin.brands');
		Route::get('/create', [ BrandsController::class, 'create'])->name('admin.brand.create');
		Route::get('/edit/{id}', [ BrandsController::class, 'edit'])->name('admin.brand.edit');
		Route::post('/store', [ BrandsController::class, 'store'])->name('admin.brand.store');
		Route::post('/brand/edit/{id}', [ BrandsController::class, 'update'])->name('admin.brand.update');
		Route::post('/brand/delete/{id}', [ BrandsController::class, 'delete'])->name('admin.brand.delete');
	});

	//Services routes
	Route::group(['prefix' => '/services'], function(){
		Route::get('/', [ BackendServicesController::class, 'index'])->name('admin.services');
		Route::get('/create', [ BackendServicesController::class, 'create'])->name('admin.service.create');
		Route::get('/edit/{id}', [ BackendServicesController::class, 'edit'])->name('admin.service.edit');
		Route::post('/store', [ BackendServicesController::class, 'store'])->name('admin.service.store');
		Route::post('/service/edit/{id}', [ BackendServicesController::class, 'update'])->name('admin.service.update');
		Route::post('/service/delete/{id}', [ BackendServicesController::class, 'delete'])->name('admin.service.delete');
	});

	//beauty Services routes
	Route::group(['prefix' => '/beautys'], function(){
		Route::get('/', [ BeautyServicesController::class, 'index'])->name('admin.beautys');
		Route::get('/create', [ BeautyServicesController::class, 'create'])->name('admin.beauty.create');
		Route::get('/edit/{id}', [ BeautyServicesController::class, 'edit'])->name('admin.beauty.edit');
		Route::post('/store', [ BeautyServicesController::class, 'store'])->name('admin.beauty.store');
		Route::post('/beauty/edit/{id}', [ BeautyServicesController::class, 'update'])->name('admin.beauty.update');
		Route::post('/beauty/delete/{id}', [ BeautyServicesController::class, 'delete'])->name('admin.beauty.delete');
	});

		//Reviews routes
	Route::group(['prefix' => '/reviews'], function(){
		Route::get('/', [ ReviewsController::class, 'index'])->name('admin.reviews');
		Route::get('/create', [ ReviewsController::class, 'create'])->name('admin.review.create');
		Route::get('/edit/{id}', [ ReviewsController::class, 'edit'])->name('admin.review.edit');
		Route::post('/store', [ ReviewsController::class, 'store'])->name('admin.review.store');
		Route::post('/review/edit/{id}', [ ReviewsController::class, 'update'])->name('admin.review.update');
		Route::post('/review/delete/{id}', [ ReviewsController::class, 'delete'])->name('admin.review.delete');
	});	

	//about us routes
	Route::group(['prefix' => '/abouts'], function(){
		Route::get('/', [ AboutUsController::class, 'index'])->name('admin.abouts');
		Route::get('/create', [ AboutUsController::class, 'create'])->name('admin.about.create');
		Route::get('/edit/{id}', [ AboutUsController::class, 'edit'])->name('admin.about.edit');
		Route::post('/store', [ AboutUsController::class, 'store'])->name('admin.about.store');
		Route::post('/about/edit/{id}', [ AboutUsController::class, 'update'])->name('admin.about.update');
		Route::post('/about/delete/{id}', [ AboutUsController::class, 'delete'])->name('admin.about.delete');
	});


		//our team routes
	Route::group(['prefix' => '/teams'], function(){
		Route::get('/', [ TeamsController::class, 'index'])->name('admin.teams');
		Route::get('/create', [ TeamsController::class, 'create'])->name('admin.team.create');
		Route::get('/edit/{id}', [ TeamsController::class, 'edit'])->name('admin.team.edit');
		Route::post('/store', [ TeamsController::class, 'store'])->name('admin.team.store');
		Route::post('/team/edit/{id}', [ TeamsController::class, 'update'])->name('admin.team.update');
		Route::post('/team/delete/{id}', [ TeamsController::class, 'delete'])->name('admin.team.delete');
	});	

	//gallery routes
	Route::group(['prefix' => '/galleries'], function(){
		Route::get('/', [ GalleriesController::class, 'index'])->name('admin.galleries');
		Route::get('/create', [ GalleriesController::class, 'create'])->name('admin.gallery.create');
		Route::get('/edit/{id}', [ GalleriesController::class, 'edit'])->name('admin.gallery.edit');
		Route::post('/store', [ GalleriesController::class, 'store'])->name('admin.gallery.store');
		Route::post('/gallery/edit/{id}', [ GalleriesController::class, 'update'])->name('admin.gallery.update');
		Route::post('/gallery/delete/{id}', [ GalleriesController::class, 'delete'])->name('admin.gallery.delete');
	});

	//faq routes
	Route::group(['prefix' => '/faqs'], function(){
		Route::get('/', [ FaqsController::class, 'index'])->name('admin.faqs');
		Route::get('/create', [ FaqsController::class, 'create'])->name('admin.faq.create');
		Route::get('/edit/{id}', [ FaqsController::class, 'edit'])->name('admin.faq.edit');
		Route::post('/store', [ FaqsController::class, 'store'])->name('admin.faq.store');
		Route::post('/faq/edit/{id}', [ FaqsController::class, 'update'])->name('admin.faq.update');
		Route::post('/faq/delete/{id}', [ FaqsController::class, 'delete'])->name('admin.faq.delete');
	});

		//contact routes
	Route::group(['prefix' => '/contacts'], function(){
		Route::get('/', [ ContactsController::class, 'index'])->name('admin.contacts');
		Route::get('/create', [ ContactsController::class, 'create'])->name('admin.contact.create');
		Route::get('/edit/{id}', [ ContactsController::class, 'edit'])->name('admin.contact.edit');
		Route::post('/store', [ ContactsController::class, 'store'])->name('admin.contact.store');
		Route::post('/contact/edit/{id}', [ ContactsController::class, 'update'])->name('admin.contact.update');
		Route::post('/contact/delete/{id}', [ ContactsController::class, 'delete'])->name('admin.contact.delete');
	});

	
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
