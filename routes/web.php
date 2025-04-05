<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $items = ['Apple', 'Banana', 'Cherry', 'Date'];
    $isAdmin = true; 

    return view('home', compact('items', 'isAdmin'));
});
