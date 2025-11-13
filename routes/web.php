<?php

use App\Livewire\Admin\BookList;
use App\Livewire\Login;
use App\Livewire\User\BookCatalog;
use Illuminate\Support\Facades\Route;

Route::get('/', BookCatalog::class)->name('book.catalog');
Route::get('/admin', BookList::class)->name('admin.book.list');
Route::get('/login', Login::class)->name('admin.login');
