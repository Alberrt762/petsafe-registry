<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/* Home page */
Route::get('/', function () {
    return view('welcome');
})->name('home');

/* Login process */
Route::post('/login', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    if ($email === 'admin' && $password === 'admin') {
        return redirect()->route('dashboard', ['role' => 'admin']);
    }

    if ($email === 'officer' && $password === 'officer') {
        return redirect()->route('dashboard', ['role' => 'officer']);
    }

    if ($email === 'citizen' && $password === 'citizen') {
        return redirect()->route('dashboard', ['role' => 'citizen']);
    }

    return back()->with('error', 'Invalid email or password.');
})->name('login.submit');

/* Dashboard page based on role */
Route::get('/dashboard/{role}', function ($role) {
    if (!in_array($role, ['admin', 'officer', 'citizen'])) {
        abort(404);
    }

    return view('dashboard_template', compact('role'));
})->name('dashboard');