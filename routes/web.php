<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $mystudents = ['std1'=>'abhishek','std2'=>'gunjan'];
    return view('welcome')->with($mystudents);
});

Route::get('/pradeep', function () {
    //$orderid = 12341234; // I have defined a data
    $orderDetail = ['orderId'=>12341234]; // PHP associative array key=>Value
    return view('order.order',$orderDetail);
});



Route::get('/abhi', function () {

    //$myfriends=['frnd1'=>'rajveer', 'frnd2'=>'Yash']; // I have defined data
    $frnd = ['frnd1'=>'rajveer'];
    return view('abhi',compact($frnd));
});

Route::get('/anil', function () {
    return 'Hello Anil';
}); 

Route::get('/gunjan', function () {
    return 'Hello Gunjan';
});

?>

