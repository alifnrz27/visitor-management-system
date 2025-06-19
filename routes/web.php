<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Page\Dashboard\DashboardController;
use App\Http\Controllers\Page\Device\DeviceController;
use App\Http\Controllers\Page\Floor\FloorController;
use App\Http\Controllers\Page\Permission\PermissionController;
use App\Http\Controllers\Page\Profile\ProfileController;
use App\Http\Controllers\Page\Role\RoleController;
use App\Http\Controllers\Page\User\UserController;
use App\Http\Controllers\Page\Visit\VisitController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Passwords\Confirm;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Verify;
use App\Livewire\Page\Dashboard;
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

Route::view('/', 'welcome')->name('home');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::get('profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password');
Route::get('floors', [FloorController::class, 'index'])->name('floors');
Route::get('floors/create', [FloorController::class, 'create'])->name('floors.create');
Route::get('devices', [DeviceController::class, 'index'])->name('devices');
Route::get('devices/create', [DeviceController::class, 'create'])->name('devices.create');
Route::get('devices/{id}', [DeviceController::class, 'show'])->name('devices.show');
Route::get('roles', [RoleController::class, 'index'])->name('roles');
Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
Route::get('permissions', [PermissionController::class, 'index'])->name('permissions');
Route::get('permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
Route::get('users', [UserController::class, 'index'])->name('users');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::get('users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('visits', [VisitController::class, 'index'])->name('visits');
Route::get('visits/{id}', [VisitController::class, 'show'])->name('visits.show');

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
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});
