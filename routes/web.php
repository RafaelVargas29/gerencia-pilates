<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/aluno', [AlunoController::class, 'index']);
Route::get('aluno/create', [AlunoController::class, 'create']);
Route::post('/aluno/store', [AlunoController::class, 'store']);
Route::get('/aluno/{aluno}', [AlunoController::class, 'show']);
Route::put('/aluno/{aluno}', [AlunoController::class, 'update']);
Route::delete('/aluno/{aluno}', [AlunoController::class, 'destroy']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
