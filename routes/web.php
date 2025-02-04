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

Route::get('/OurTeam', function () {
    $name = "Adnan";
    $names = ["Apple","Ball","Cat"];
    return view('TeamOur', ['name' => $name, 'names' => $names]);
    // return view('TeamOur', compact('name', 'names')); 
});

Route::get('/OurTeam/{}', function () {
    return "<h3>Route find the value</h3>";
});

Route::get('/CalcTable/{tn}/{sn}/{en}', function ($TblNum, $StrtNum,$EndNum) {
    return view('CalcView',['tn' => $TblNum,'sn' => $StrtNum , 'en' =>$EndNum]);
});

Route::get('/post/{id?}',function(string $id = null){
    if($id){
        return "<h2>Post ID = ".$id."</h2>";
    }else{
        return "<h2>Post ID not found</h2>";
    }
});
