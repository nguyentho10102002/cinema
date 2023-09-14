<?php

use App\Http\Controllers\PhimController;
use App\Http\Controllers\XeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/danh-sach-phim', [PhimController::class, 'getData']);
Route::post('/admin/xe/create', [XeController::class, 'store']);
