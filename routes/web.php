<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/About',function(){
    return "<h2>Just checking a route</h2>";
});

Route::get('/About/{id}',function($id){
    return "<h2>Your Route have id:$id</h2>";
})->whereNumber('id');

Route::get('/Team',function(){
    return "<h2>Welcome Team page</h2>";
});

Route::get('/Team/{name}',function($name){
    return "<h2>Team member: $name </h2>";
})->whereAlpha('name');

Route::get('/Contact/{num}',function($num){
    return "<h2>Contact num: $num</h2>";
})->whereAlphaNumeric('num');