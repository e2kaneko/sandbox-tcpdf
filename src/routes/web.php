<?php
Route::get('/', function(){
    return view('welcome');
});
Route::get('/html2pdf', 'HTMLController@index');
Route::get('/blade2pdf', 'BladeController@index');

