<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;


Route::prefix('admin')->group(function () {
    Route::get('/home', [AdminController::class, 'home'])->name('admin.home');
    Route::get('/records', [AdminController::class, 'records'])->name('records');
    Route::get('/adoption', [AdminController::class, 'adoption'])->name('adoption');
    Route::get('/incident-center', [AdminController::class, 'incidentCenter'])->name('incident.center');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // or wherever you want to send users
})->name('logout');

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