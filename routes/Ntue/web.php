<?php

use Illuminate\Support\Facades\Route;

Route::prefix('ntue')->group(function(){
	Route::resource('/NewFunctional', 'Ntue\A01\NewFunctionalController');
});