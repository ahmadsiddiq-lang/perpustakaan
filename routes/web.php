<?php

use App\Livewire\Admin\BookForm;
use App\Livewire\Admin\BookList;
use App\Livewire\Login;
use App\Livewire\User\BookCatalog;
use Illuminate\Support\Facades\Route;

// User Routes
Route::get('/', BookCatalog::class)->name('book.catalog');

// Admin Routes
Route::get('/admin', BookList::class)->name('admin.book.list');
Route::get('/admin/book-form', BookForm::class)->name('admin.book.form');

// Global Routes
Route::get('/login', Login::class)->name('admin.login');
