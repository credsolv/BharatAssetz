<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Auth;

// Redirect based on role
Route::get('/', function () {
    if (!Auth::check()) {
        return redirect()->route('login');
    }

    $user = Auth::user();
    return match ($user->role) {
        'admin' => redirect()->route('admin.dashboard'),
        'branch' => redirect()->route('branch.dashboard'),
        default => redirect()->route('staff.dashboard'),
    };
})->name('home');

// Authentication Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/chat', [AdminController::class, 'chat'])->name('admin.chat');
    Route::get('/admin/calendar', [AdminController::class, 'calendar'])->name('admin.calendar');
    Route::get('/admin/activities', [AdminController::class, 'activities'])->name('admin.activities');

    Route::get('/admin/email', [AdminController::class, 'email'])->name('admin.email');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');

    Route::get('/admin/propertylist', [PropertyController::class, 'propertyList'])->name('admin.propertylist');
    Route::get('/admin/propertyuploads', [PropertyController::class, 'propertyUploads'])->name('admin.propertyuploads');

    Route::get('/admin/analytics', [AdminController::class, 'analytics'])->name('admin.analytics');
   
    Route::prefix('admin/branch')->group(function () {
        Route::get('/', [AdminController::class, 'branch'])->name('admin.branch'); // Branch Management Page
        Route::get('/all', [AdminController::class, 'addBranch'])->name('admin.addBranch');
        Route::get('/delete', [AdminController::class, 'deleteBranch'])->name('admin.deleteBranch');
    });

    Route::get('/branch/dashboard', [BranchController::class, 'index'])->name('branch.dashboard');
    Route::get('/staff/dashboard', [StaffController::class, 'index'])->name('staff.dashboard');
});
