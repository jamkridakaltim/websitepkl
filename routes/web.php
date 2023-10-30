<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\PollingController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\PostcategoriesController;


Route::get('galeri', [ GaleriController::class, 'index'])->name('galeri.index');
Route::get('galeri/create', [ GaleriController::class, 'create'])->name('galeri.create');
Route::post('galeri/create', [ GaleriController::class, 'store'])->name('galeri.store');
Route::get('galeri/{id}/edit', [ GaleriController::class, 'edit'])->name('galeri.edit');
Route::put('galeri/{id}/edit', [ GaleriController::class, 'update'])->name('galeri.update');
Route::delete('galeri/{id}/delete', [ GaleriController::class, 'destroy'])->name('galeri.destroy');

Route::get('visitor', [ VisitorController::class, 'index'])->name('visitor.index');
Route::get('visitor/create', [ VisitorController::class, 'create'])->name('visitor.create');
Route::post('visitor/create', [ VisitorController::class, 'store'])->name('visitor.store');
Route::get('visitor/{id}/edit', [ VisitorController::class, 'edit'])->name('visitor.edit');
Route::put('visitor/{id}/edit', [ VisitorController::class, 'update'])->name('visitor.update');
Route::delete('visitor/{id}/delete', [ VisitorController::class, 'destroy'])->name('visitor.destroy');

Route::get('postcategories', [ PostcategoriesController::class, 'index'])->name('postcategories.index');
Route::get('postcategories/create', [ PostcategoriesController::class, 'create'])->name('postcategories.create');
Route::post('postcategories/create', [ PostcategoriesController::class, 'store'])->name('postcategories.store');
Route::get('postcategories/{id}/edit', [ PostcategoriesController::class, 'edit'])->name('postcategories.edit');
Route::put('postcategories/{id}/edit', [ PostcategoriesController::class, 'update'])->name('postcategories.update');
Route::delete('postcategories/{id}/delete', [ PostcategoriesController::class, 'destroy'])->name('postcategories.destroy');

Route::get('agenda', [ AgendaController::class, 'index'])->name('agenda.index');
Route::get('agenda/create', [ AgendaController::class, 'create'])->name('agenda.create');
Route::post('agenda/create', [ AgendaController::class, 'store'])->name('agenda.store');
Route::get('agenda/{id}/edit', [ AgendaController::class, 'edit'])->name('agenda.edit');
Route::put('agenda/{id}/edit', [ AgendaController::class, 'update'])->name('agenda.update');
Route::delete('agenda/{id}', [ AgendaController::class, 'destroy'])->name('agenda.destroy');

Route::get('polling', [ PollingController::class, 'index'])->name('polling.index');
Route::get('polling/create', [ PollingController::class, 'create'])->name('polling.create');
Route::post('polling/create', [ PollingController::class, 'store'])->name('polling.store');
Route::get('polling/{id}/edit', [ PollingController::class, 'edit'])->name('polling.edit');
Route::put('polling/{id}/edit', [ PollingController::class, 'update'])->name('polling.update');
Route::delete('polling/{id}', [ PollingController::class, 'destroy'])->name('polling.destroy');

Route::get('file', [ FileController::class, 'index'])->name('file.index');
Route::get('file/create', [ FileController::class, 'create'])->name('file.create');
Route::post('file/create', [ FileController::class, 'store'])->name('file.store');
Route::get('file/{id}/edit', [ FileController::class, 'edit'])->name('file.edit');
Route::put('file/{id}/edit', [ FileController::class, 'update'])->name('file.update');
Route::delete('file/{id}', [ FileController::class, 'destroy'])->name('file.destroy');


Route::get('post', [ PostController::class, 'index'])->name('post.index');
Route::get('post/create', [ PostController::class, 'create'])->name('post.create');
Route::post('post/create', [ PostController::class, 'store'])->name('post.store');
Route::get('post/{id}/edit', [ PostController::class, 'edit'])->name('post.edit');
Route::put('post/{id}/edit', [ PostController::class, 'update'])->name('post.update');
Route::delete('post/{id}', [ PostController::class, 'destroy'])->name('post.destroy');

Route::get('link', [ LinkController::class, 'index'])->name('link.index');
Route::get('link/create', [ LinkController::class, 'create'])->name('link.create');
Route::post('link/create', [ LinkController::class, 'store'])->name('link.store');
Route::get('link/{id}/edit', [ LinkController::class, 'edit'])->name('link.edit');
Route::put('link/{id}/edit', [ LinkController::class, 'update'])->name('link.update');
Route::delete('link/{id}', [ LinkController::class, 'destroy'])->name('link.destroy');

Route::get('users', [ UsersController::class, 'index'])->name('users.index');
Route::get('users/create', [ UsersController::class, 'create'])->name('users.create');
Route::post('users/create', [ UsersController::class, 'store'])->name('users.store');
Route::get('users/{id}/edit', [ UsersController::class, 'edit'])->name('users.edit');
Route::put('users/{id}/edit', [ UsersController::class, 'update'])->name('users.update');
Route::delete('users/{id}', [ UsersController::class, 'destroy'])->name('users.destroy');

Route::get('contact', [ ContactController::class, 'index'])->name('contact.index');
Route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('contact/create', [ContactController::class, 'store'])->name('contact.store');
Route::get('contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
Route::put('contact/{id}/edit', [ContactController::class, 'update'])->name('contact.update');
Route::delete('contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

Route::get('menu', [ MenuController::class, 'index'])->name('menu.index');
Route::get('menu/create', [MenuController::class, 'create'])->name('menu.create');
Route::post('menu/create', [MenuController::class, 'store'])->name('menu.store');
Route::get('menu/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
Route::put('menu/{id}/edit', [MenuController::class, 'update'])->name('menu.update');
Route::delete('menu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');

Route::get('setting', [ SettingController::class, 'index'])->name('setting.index');
Route::get('setting/create', [ SettingController::class, 'create'])->name('setting.create');
Route::post('setting/create', [ SettingController::class, 'store'])->name('setting.store');
Route::get('setting/{id}/edit', [SettingController::class, 'edit'])->name('setting.edit');
Route::put('setting/{id}/edit', [SettingController::class, 'update'])->name('setting.update');
Route::delete('setting/{id}', [SettingController::class, 'destroy'])->name('setting.destroy');

Route::get('/', function () {
    return view('welcome');
});
