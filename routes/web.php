<?php

use Illuminate\Support\Facades\Route;

//posts index
Route::get('/', App\Livewire\Posts\Index::class)->name('posts.index');