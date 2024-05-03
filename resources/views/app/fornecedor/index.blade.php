<h3>Fornecedor</h3>

{{-- Fica o comentário que será descartado pelo interpretador do blade. --}}

{{-- @php
    // Para comentários de uma linha.
    /*
        Para comentários de múltiplas linhas.
    */
    echo 'Texto de teste';
@endphp --}}


@php

@endphp

{{-- @dd($fornecedores) --}}

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existe alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrrados</h3>
@else
    <h3>Não existem fornecedores cadastrados.</h3>
@endif
