<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Rota Página Principal
Route::get('/', 'CampeonatoController@index');

//Rotas do Controller Campeonato
Route::get('/campeonato', 'CampeonatoController@index');
Route::get('/campeonato/listagem', 'CampeonatoController@listar');
Route::post('/campeonato/adicionar', 'CampeonatoController@adicionar');
Route::get('/campeonato/{id}/remover', 'CampeonatoController@remover');
Route::get('/campeonato/{id}/editar', 'CampeonatoController@editar');
Route::post('/campeonato/{id}/alterar', 'CampeonatoController@alterar');

//Rotas do Controller Categorias de Campeonato
Route::get('/categoria', 'CategoriaController@index');
Route::get('/categoria/listagem', 'CategoriaController@listar');
Route::post('/categoria/adicionar','CategoriaController@adicionar');

//Rotas do Controller Participantes
Route::get('/participante', 'ParticipanteController@index');
Route::get('/participante/listagem', 'ParticipanteController@listar');
Route::post('/participante/adicionar', 'ParticipanteController@adicionar');
Route::get('/participante/{id}/remover', 'ParticipanteController@remover');

//Rotas do Controller Confronto
Route::get('/confronto', 'ConfrontoController@index');
Route::post('/confronto/adicionar', 'ConfrontoController@adicionar');
Route::get('/confronto/listagem', 'ConfrontoController@listar');
Route::get('/confronto/numerar-jogadores', 'ConfrontoController@numerarJogador');
Route::post('/confronto/adionarnumeracao', 'ConfrontoController@adicionarNumeracao');

//Rotas do Controller Sorteio
Route::get('/sorteio', 'SorteioController@index');
Route::post('/sorteio/anexar-jogador', 'SorteioController@adicionar');

//Rotas do Controller Mobile
Route::get('/m', 'MobileController@index');