<?php

use App\Http\Controllers\DashboardConrtoller;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Method HTTP:
 * 1. Get = menampilkan halaman
 * 2. Post= mengirim data 
 * 3. Put = meng-update data
 * 4. Delete = menghapus data 
 */

// route untuk menampilkan teks
Route::get('/salam/{nama}', function ($nama) {
    return "Assalamualaikum $nama";
});

Route::get('admin/dashboard', [DashboardConrtoller::class, 'index']);
  