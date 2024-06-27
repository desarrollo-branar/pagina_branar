<?php

use App\Http\Controllers\PageController;
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
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('about-us/', [PageController::class, 'about'])->name('about');
Route::get('contact/', [PageController::class, 'contact'])->name('contact');
Route::get('centro-de-servicio-autorizado/', [PageController::class, 'csa'])->name('csa');
Route::get('infraestructura/', [PageController::class, 'infraestructure'])->name('infraestructure');
Route::get('social-media/', [PageController::class, 'social_media'])->name('social_media');
Route::get('profit-plus/', [PageController::class, 'profit_plus'])->name('profit_plus');
Route::get('service-pack/', [PageController::class, 'servicepack'])->name('servicepack');
Route::get('dev-web/', [PageController::class, 'dev_web'])->name('dev_web');
