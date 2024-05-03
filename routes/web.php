<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'Olá, seja bem vindo ao curso!';
// });

Route::fallback(function(){
    echo "A rota acessada não existe! <a href='" . route('site.index') . "'>Clique aqui para ir a página inicial</a>";
});

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', function () {
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function () {

    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');

    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');



// Route::get('/rota1', function(){
//     echo 'rota 1';
// })->name('site.rota1');
//! Duas maneiras de fazer direcionamento
// Route::redirect('/rota2','/rota1');
// Route::get('/rota2', function(){
//     return redirect()->route('site.rota1');
// })->name('site.rota2');
//! FIM

//! Aqui está um exemplo de rota, que obriga os parametros que virem a ser verificados, caso seja vazio ou não, e o valorq ue irá vir
// Route::get(
//             '/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
//             function (
//                         string $nome = 'Nome não informado',
//                         string $categoria = 'Categoria não informada',
//                         string $assunto = 'Assunto não informado',
//                         string $mensagem = 'Mensagem não informada'
//                     )
//                     {
//                         echo 'Estamos aqui ' . $nome . $categoria . $assunto . $mensagem;
//                     }
//         );

// Route::get(
//     '/contato/{nome}/{categoria_id}',
//     function (
//                 string $nome = 'Desconhecido',
//                 int $categoria_id = 1 // 1 = 'informação'
//             )
//             {
//                 echo "Estamos aqui: $nome - $categoria_id";
//             }
// )->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
//! FIM

