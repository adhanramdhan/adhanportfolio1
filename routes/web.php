<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [LoginController::class, 'index']);
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('home', \App\Http\Controllers\HomeController::class);

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [\App\Http\Controllers\LoginController::class, 'index']);
    Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
    Route::resource('login', \App\Http\Controllers\LoginController::class);
    Route::resource('user', \App\Http\Controllers\UserController::class);
    Route::resource('profile', \App\Http\Controllers\ProfileController::class);
    Route::resource('experience', \App\Http\Controllers\ExperienceController::class);
    Route::resource('education', \App\Http\Controllers\EducationController::class);
    Route::resource('setting', \App\Http\Controllers\SettingController::class);
    Route::resource('about', \App\Http\Controllers\AboutController::class);
    Route::resource('skill', \App\Http\Controllers\SkillController::class);
    Route::resource('portfolio', \App\Http\Controllers\PortfolioController::class);
    Route::resource('imgproject', \App\Http\Controllers\ImgprojectController::class);
    Route::resource('ctgproject', \App\Http\Controllers\CtgprojectController::class);
    Route::resource('whatido', \App\Http\Controllers\WhatidoController::class);

});
