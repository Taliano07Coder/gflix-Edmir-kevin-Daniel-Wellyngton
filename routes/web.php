<?php

use App\Models\Nacionalidade;
use App\Models\Produtora;
use App\Models\Diretor;
use App\Models\Filme;
use App\Models\Ator;
use App\Models\Genero;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Guilherme', function() {
    return 'olá Guilherme';
});

Route::view('/conheca','sobre');

Route::get('/generos', function() {
    $minhaVariavel = Genero::all();
    dd($minhaVariavel);
});

Route::get('/atores', function() {
    $minhaVariavel = Ator::all();
    dd($minhaVariavel);
});

Route::get('/filmes', function() {
    $minhaVariavel = Filme::all();
    dd($minhaVariavel);
});

Route::get('/diretores', function() {
    $minhaVariavel = Diretor::all();
    dd($minhaVariavel);
});

Route::get('/produtoras', function() {
    $minhaVariavel = Produtora::all();
    dd($minhaVariavel);
});

Route::get('/nacionalidades', function() {
    $minhaVariavel = Nacionalidade::all();
    dd($minhaVariavel);
});

Route::get('/lista-filmes', function() {
    $filmes = Filme::all();
    return view('lista-filmes', compact('filmes'));
});
