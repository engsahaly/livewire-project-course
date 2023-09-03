<?php

use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

/**
 * Front Routes
 */
Route::prefix('/')->name('front.')->group(function () {

    // ============================================ INDEX PAGE
    Route::view('', 'front.index')->name('index');

    // ============================================ ABOUT PAGE
    Route::view('about', 'front.about')->name('about');

    // ============================================ CONTACT PAGE
    Route::view('contact', 'front.contact')->name('contact');

    // ============================================ PROJECTS PAGE
    Route::view('projects', 'front.projects')->name('projects');

    // ============================================ SERVICES PAGE
    Route::view('services', 'front.services')->name('services');

    // ============================================ TEAM PAGE
    Route::view('team', 'front.team')->name('team');

    // ============================================ TESTMONIALS PAGE
    Route::view('testmonials', 'front.testmonials')->name('testmonials');
});



/**
 * Admin Routes
 */
Route::prefix('/admin/')->name('admin.')->group(function () {

    Route::middleware('admin')->group(function () {
        // ============================================ INDEX PAGE
        Route::view('', 'admin.index')->name('index');

        // ============================================ SETTINGS PAGE
        Route::view('settings', 'admin.settings.index')->name('settings');

        // ============================================ SKILLS PAGE
        Route::view('skills', 'admin.skills.index')->name('skills');

        // ============================================ SUBSCRIBERS PAGE
        Route::view('subscribers', 'admin.subscribers.index')->name('subscribers');

        // ============================================ COUNTERS PAGE
        Route::view('counters', 'admin.counters.index')->name('counters');

        // ============================================ SERVICES PAGE
        Route::view('services', 'admin.services.index')->name('services');

        // ============================================ MESSAGES PAGE
        Route::view('messages', 'admin.messages.index')->name('messages');

        // ============================================ CATEGORIES PAGE
        Route::view('categories', 'admin.categories.index')->name('categories');

        // ============================================ PROJECTS PAGE
        Route::view('projects', 'admin.projects.index')->name('projects');
    });

    // ============================================ LOGIN PAGE
    Route::view('/login', 'admin.auth.login')->middleware('guest:admin')->name('login');
});
