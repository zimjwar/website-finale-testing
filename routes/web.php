<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   
    Route::get('/auth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('/auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
    
    Route::get('/auth/facebook', [SocialAuthController::class, 'redirectToFacebook'])->name('auth.facebook');
    Route::get('/auth/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback']);
    
      //The dashboard Navigation links
    Route::get('/dashboardNav-links/myproject', function () {
        return view('myproject');})->name('myproject');
    
    Route::get('/dashboardNav-links/inbox', function () {
        return view('inbox'); })->name('inbox');
    
    Route::get('/dashboardNav-links/profile', function () {
        return view('profile');})->name('profile');
    
    Route::get('/dashboardNav-links/projects', function () {
        return view('projects');  })->name('projects');

  // Searching users by username
//    Route::get('user/search',[UserController::class,'search'])->name('users.search') ;

//    Route::post('projects/filter',[ProjectController::class,'filter'])->name('project.filter');
   
//    Route::post('messages/send', [MessageController::class, 'send'])->name('messages.send');
//    Route::get('projects/{project}/reviews', [ReviewController::class, 'showReviews'])->name('projects.reviews');
//    Route::post('users/{user}/skills/add', [SkillController::class, 'addSkill'])->name('users.skills.add');


});

require __DIR__.'/auth.php';
