<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\FakultasController;


Route::get('fakultas', [FakultasController::class,'index']);
Route::post('fakultas', [FakultasController::class,'store']);
