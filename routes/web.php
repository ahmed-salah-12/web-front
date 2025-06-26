<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\lifelinehomepage;
use App\Http\Controllers\AuthController;


// 🔹 الصفحة الرئيسية بعد تسجيل الدخول
Route::get('/home', function () {
  return view('pages-home');
})->middleware(['auth', 'verified'])->name('pages-home');

// 🔹 الصفحة الرئيسية قبل تسجيل الدخول
Route::get('/', [lifelinehomepage::class, 'index'])->name('pages-lifeline');

// 🔹 لغة الموقع
Route::get('/lang/{locale}', [LanguageController::class, 'swap']);

// 🔹 صفحات إضافية
Route::get('/page-2', [Page2::class, 'index']);
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');

// ✅ تسجيل الدخول
// Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('login'); // عرض صفحة تسجيل الدخول
// Route::post('/auth/login-basic', [AuthController::class, 'login'])->name('login.post'); // معالجة بيانات تسجيل الدخول

// // ✅ التسجيل
// Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');

// // ✅ تسجيل الخروج
// Route::post('/auth/logout', [AuthController::class, 'logout'])->name('logout');

// ✅ حماية الصفحات بعد تسجيل الدخول
Route::middleware('auth')->group(function () {
  Route::get('/dashboard', function () {
    return redirect()->route('pages-home'); // إعادة التوجيه بعد تسجيل الدخول
  })->name('dashboard');
});
