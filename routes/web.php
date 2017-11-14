<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
	return '<h1>Hallo</h1>'
	.'Selamat datang di webapp saya<br>'
	.'Laravel, emang keren.';
});

Route::get('/about/1',function(){
	return '<h1>Ini halaman about 1 saya</h1>';

	});

Route::get('/about/esti',function(){
	return '<h1>Ini halaman about 2 web saya</h1>';

	});

Route::get('/about/estiw',function(){
	return '<h1>Ini halaman about 3 webapp saya</h1>';

	});

Route::get('/about/esti27',function(){
	return '<h1>Ini halaman about 4 webapp Laravel saya</h1>';

	});

Route::get('/about/Laravel',function(){
	return '<h1> Hallo Ini halaman about 5 webapp Laravel saya</h1>';

	});

//basic route
Route::get('/kontak',function(){
	return view('kontak');

	});

Route::get('profil',function(){
	return view('user.profil');

	});

//route parameter
Route::get('/about/{page}',function($a){
	return 'Hallo Ini halaman about 5 webapp Laravel saya<b>'.$a.'</b>';

	});

Route::get('/kantin/{makan}/{minum}/{cemilan}',function($a,$b,$c){
	return 'Saya pesan '.$a.'<br>Minumnya '.$b.'<br>Tambah cemilan '.$c;
	});

//route optional parameter
Route::get('user/{name?}',function($name = 'esti'){
	return 'Nama saya '.$name;

	});