<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

/*Route::get('/', function () {
    return 'ROUTE WORKS';
});*/

Route::get('/', [ChirpController::class, 'index']);
