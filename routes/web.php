<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;

Route::get('/', function () {
    return view('welcome');
});

// Admin Routes
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home');

Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::get('/admin/forget-password', [AdminLoginController::class, 'admin_forget_password'])->name('admin_forget_password');