<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

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

Route::get('/', [\App\Http\Controllers\PublicController::class, 'index']);


//Route::middleware(['auth:sanctum', 'verified'])->get('/main', function () {
//    return view('components/admin/main/index');
//})->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    //Section main
    Route::get('/main', [\App\Http\Controllers\MainController::class, 'index'])->name('main-index');
    Route::patch('/main', [\App\Http\Controllers\MainController::class, 'update'])->name('main-edit');
    //Section contact
    Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact-index');
    Route::patch('/contact', [\App\Http\Controllers\ContactController::class, 'update'])->name('contact-edit');
    //Section FAQ
    Route::get('/faq', [\App\Http\Controllers\FaqController::class, 'index'])->name('faq-index');
    Route::get('/faq/create', [\App\Http\Controllers\FaqController::class, 'create'])->name('faq-create');
    Route::post('/faq', [\App\Http\Controllers\FaqController::class, 'store'])->name('faq-insert');
    Route::get('/faq/{id}', [\App\Http\Controllers\FaqController::class, 'edit'])->name('faq-edit');
    Route::patch('/faq{id}', [\App\Http\Controllers\FaqController::class, 'update'])->name('faq-update');
    Route::delete('/faq/{id}', [\App\Http\Controllers\FaqController::class, 'delete'])->name('faq-delete');
    //Section About us
    Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about-index');
    Route::get('/about/create', [\App\Http\Controllers\AboutController::class, 'create'])->name('about-create');
    Route::post('/about', [\App\Http\Controllers\AboutController::class, 'store'])->name('about-insert');
    Route::get('/about/{id}', [\App\Http\Controllers\AboutController::class, 'edit'])->name('about-edit');
    Route::patch('/about{id}', [\App\Http\Controllers\AboutController::class, 'update'])->name('about-update');
    Route::delete('/about/{id}', [\App\Http\Controllers\AboutController::class, 'delete'])->name('about-delete');
    //Section Services
    Route::get('/service', [\App\Http\Controllers\ServiceController::class, 'index'])->name('service-index');
    Route::get('/service/create', [\App\Http\Controllers\ServiceController::class, 'create'])->name('service-create');
    Route::post('/service', [\App\Http\Controllers\ServiceController::class, 'store'])->name('service-insert');
    Route::get('/service/{id}', [\App\Http\Controllers\ServiceController::class, 'edit'])->name('service-edit');
    Route::patch('/service{id}', [\App\Http\Controllers\ServiceController::class, 'update'])->name('service-update');
    Route::delete('/service/{id}', [\App\Http\Controllers\ServiceController::class, 'delete'])->name('service-delete');
    //Section portfolio
    Route::get('/portfolio', [\App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio-index');
    Route::get('/portfolio/create', [\App\Http\Controllers\PortfolioController::class, 'create'])->name('portfolio-create');
    Route::post('/portfolio', [\App\Http\Controllers\PortfolioController::class, 'store'])->name('portfolio-insert');
    Route::get('/portfolio/{id}', [\App\Http\Controllers\PortfolioController::class, 'edit'])->name('portfolio-edit');
    Route::patch('/portfolio{id}', [\App\Http\Controllers\PortfolioController::class, 'update'])->name('portfolio-update');
    Route::delete('/portfolio/{id}', [\App\Http\Controllers\PortfolioController::class, 'delete'])->name('portfolio-delete');
});

