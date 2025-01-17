<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\PromptController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect()->route('prompts.index');
    })->name('home');
    Route::get('prompts/all', [PromptController::class, 'index'])->name('prompts.index');
    Route::get('prompts/personal', [PromptController::class, 'showYourPrompts'])->name('prompts.showYourPrompts');
    Route::get('prompts/liked', [PromptController::class, 'showLikedPrompts'])->name('prompts.showLikedPrompts');
    Route::post('prompts', [PromptController::class, 'store'])->name('prompts.store');
    Route::post('prompts/delete', [PromptController::class, 'delete'])->name('prompts.delete');
    Route::post('prompts/update', [PromptController::class, 'update'])->name('prompts.update');
    Route::post('prompts/like', [PromptController::class, 'likes'])->name('prompts.likes');
    Route::view('/about', 'about')->name('about');

    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});
