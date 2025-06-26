<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
      $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // 🔹 التحقق مما إذا كانت محاولة تسجيل الدخول ناجحة
    if (Auth::attempt($credentials)) {
        dd(Auth::check()); // سيُظهر `true` إذا كان المستخدم قد سجل الدخول بنجاح
    }

    return back()->withErrors([
        'email' => 'بيانات تسجيل الدخول غير صحيحة.',
    ]);
        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login'); // إعادة التوجيه لصفحة تسجيل الدخول
    }

}
