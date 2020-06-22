<?php
// $portafolio= [
//  ['title' => 'proyecto # 1'],
//	['title' => 'proyecto # 2'],
//	['title' => 'proyecto # 3'],
//	['title' => 'proyecto # 4'],
//];

Route:: view('/','casa')->name('casa');
Route:: view('/about','about')->name('about');
Route:: view('/portfolio','portfolio',compact('portafolio'))->name('portfolio');
Route:: view('/contact','contact')->name('contact');
route:: post('contact', 'mensajesdecontacto')


//Route::get('/', function () {
//	$nombre = "juancito";
//
//    return view('casa', compact('nombre'));
//})->name('casa');
