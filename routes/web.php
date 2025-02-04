<?php

use Dotenv\Util\Str;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Cast\String_;

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

Route::get('/Select/{cname?}',function(String $cname = null){
    if($cname){
        return "<h2>Your select: ".$cname."</h2>";
    }else{
        return "<h2>Select is empty</h2>";
    }
})->whereIn('cname',['Karachi','Lahore','Islamabad']);

Route::get('/YehNameBadMainchangeHoSaktaHai', function () {
    return "<h2>You can give a name to the route</h2>";
})->name('Testing');

Route::get('/abc',function(){
    return redirect()->route('Testing');
});

Route::prefix('/pages')->group(function(){
    Route::get('/AboutUs',function(){
        return "<h2>About Us in the Pages</h2>";
    });
    Route::get('/ContactUs',function(){
        return "<h2>Contact Us in the Pages</h2>";
    });
    Route::get('/OurServices',function(){
        return "<h2>Our Services in the Pages</h2>";
    });
    Route::get('/ImageGallery',function(){
        return "<h2>Images Gallery in the Pages</h2>";
    });
});