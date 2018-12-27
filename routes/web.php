<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix'=>'aluno'], function (){
    Route::get('/list/', 'AlunoController@getAlunos')->name('aluno.list');
    Route::get('/form/{id?}', 'AlunoController@form')->name('aluno.form'); //acessa aluno controller e executa o que estiver lá dentro
    Route::get('/deletar/{id}','AlunoController@deletarAluno')->name('aluno.deletar'); //acessa
    Route::post('/salvar/', 'AlunoController@salvarAluno')->name('aluno.salvarAluno'); //rota para salvar o form
});

Route::get('/', function () {
    return view('welcome');
});
