<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\CaseStudies;
use App\Http\Livewire\Creators;
use App\Http\Livewire\Marks;
use App\Http\Livewire\Testimonials;

use App\Http\Livewire\FrontHome;
use App\Http\Livewire\FrontCreators;
use App\Http\Livewire\FrontCreator;
use App\Http\Livewire\FrontCaseStudies;
use App\Http\Livewire\FrontCaseStudy;

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
//     return view('home');
// });
Route::get('/', FrontHome::class)->name('front.home');

// Route::get('/styleguide', function () {
//     return view('styleguide');
// });

Route::get('createurs', FrontCreators::class)->name('front.creators');
Route::get('createur/{creator_id}', FrontCreator::class)->name('front.creator');

// Route::get('/createur', function () {
//     return view('creator');
// });

Route::get('campagnes', FrontCaseStudies::class)->name('front.cases');
Route::get('campagne/{case_id}', FrontCaseStudy::class)->name('front.case');

Route::get('/conditions-generales', function () {
    return view('terms');
});

Route::get('/404', function () {
    return view('errors.404');
});

// Route::get('/500', function () {
//     return view('errors.500');
// });

// Route::get('/503', function () {
//     return view('errors.503');
// });

// Route::get('/401', function () {
//     return view('errors.401');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('dashboard', function () { return view('admin.dashboard'); })->name('dashboard');
    Route::get('cases', CaseStudies::class)->name('cases');
    Route::get('creators', Creators::class)->name('creators');
    Route::get('marks', Marks::class)->name('marks');
    Route::get('testimonials', Testimonials::class)->name('testimonials');
});
