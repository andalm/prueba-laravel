<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('candidatos/{slug}/{id}', [
    'as' => 'categoria', 
    'uses' => 'CandidatosController@categoria'
]);

Route::get('{slug}/{id}', [
    'as' => 'candidato', 
    'uses' => 'CandidatosController@mostrar'
]);

