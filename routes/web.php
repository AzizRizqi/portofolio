<?php


use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Models\Experience;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;








Route::get('/', function () {
    return view('login.index');
});

Route::get('dashboard', [ProfileController::class, 'index']);
Route::post('action-login', [ProfileController::class, 'login'])->name('action-login');
Route::post('/', [ProfileController::class, 'login'])->name('/');
Route::resource('user', UserController::class);
Route::resource('profile', ProfileController::class);
Route::resource('pengalaman', ExperienceController::class);
Route::resource('pendidikan', EducationController::class);
Route::resource('skill', SkillController::class);
Route::resource('contact', ContactController::class);
// Route::get('user', [UserController::class, 'index'])->name('user.index');
// Route::get('user/create', [UserController::class, 'create'])->name('user.create');


// Route::get('user/{id}/edit', [UserController::class, 'create'])->name('user.edit');

Route::get('profiles', [PortoController::class, 'profiles'])->name('profiles');

Route::get('experiences', [PortoController::class, 'experiences'])->name('experiences');

Route::get('educations', [PortoController::class, 'educations'])->name('educations');

Route::get('skills', [PortoController::class, 'skills'])->name('skills');

