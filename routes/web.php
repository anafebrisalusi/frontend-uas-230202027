<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buku;
use App\Http\Controllers\Peminjaman;

Route::get('/buku', [Buku::class, 'index']);
    Route::get('/buku/create', [Buku::class, 'create']);
    Route::post('/buku', [Buku::class, 'store']);
    Route::get('/buku/{id}/edit', [Buku::class, 'edit']);
    Route::put('/buku/{id}', [Buku::class, 'update']);
    Route::delete('/buku/{id}', [Buku::class, 'destroy']);

Route::get('/peminjaman', [Peminjaman::class, 'index']);
    Route::get('/peminjaman/create', [Peminjaman::class, 'create']);
    Route::post('/peminjaman', [Peminjaman::class, 'store']);
    Route::get('/peminjaman/{id}/edit', [Peminjaman::class, 'edit']);
    Route::put('/peminjaman/{id}', [Peminjaman::class, 'update']);
    Route::delete('/peminjaman/{id}', [Peminjaman::class, 'destroy']);