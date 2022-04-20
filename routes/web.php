<?php

use Illuminate\Support\Facades\Route;

$navbarList = [
    [
        "title" => 'character'
    ],
    [
        "title" => 'comics'
    ],
];



Route::get('/', function () {
    return view('home');
});