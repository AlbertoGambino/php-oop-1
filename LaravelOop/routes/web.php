<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'TestController@home')
    -> name('home');
