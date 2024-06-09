<?php
use App\Http\Controllers\SparqlController;

Route::get('/sparql', [SparqlController::class, 'index']);
