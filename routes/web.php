<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'App\Http\Controllers\SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');


Route::prefix('/app')->group(function () {
    Route::get('/fornecedores', 'App\Http\Controllers\FornecedorController@index')->name('app.fornecedores');
});

// // Rota com parâmetros opcionais e validação
// Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}', function (
//     Request $request
// ) {
//     $request->validate([
//         'nome' => 'required|string',
//         'categoria' => 'nullable|string',
//         'assunto' => 'nullable|string',
//         'mensagem' => 'nullable|string'
//     ]);

//     // Processamento da lógica da rota...
// })
// ->name('contato');

// // Rota com validação personalizada
// Route::get('/contato/{nome}/{categoria_id}', function (
//     Request $request
// ) {
//     $request->validate([
//         'nome' => 'required|string',
//         'categoria_id' => 'required|integer|between:1,3' // Validação personalizada
//     ]);

//     // Processamento da lógica da rota...
// })
// ->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+')
// ->name('contato');

// // Rota de teste com parâmetros
// Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');