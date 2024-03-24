<?php

use App\Http\Controllers\HalamanDashboardController;
use App\Http\Controllers\UserLoginController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [HalamanDashboardController::class , "DisplayLogin"]);
Route::get("/super-admin" , [HalamanDashboardController::class , "DisplaySuperAdmin"])->middleware(RoleMiddleware::class);
Route::get("/admin" , [HalamanDashboardController::class , "DisplayAdmin"])->middleware(RoleMiddleware::class);
Route::get("/raja" , [HalamanDashboardController::class , "DisplayRaja"])->middleware(RoleMiddleware::class);
Route::get("/masyarakat" , [HalamanDashboardController::class , "DisplayPenduduk"])->middleware(RoleMiddleware::class);

//Actions
Route::post('/login', [UserLoginController::class , "Login"]);
Route::post('/logout', [UserLoginController::class , "LogOut"]);