<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clustering', function () {
    return view('clustering');
});

use App\Http\Controllers\ClusteringController;

Route::get('/form', function () {
    return view('form');
});

Route::post('/proses-cluster', [ClusteringController::class, 'proses'])->name('proses.cluster');
