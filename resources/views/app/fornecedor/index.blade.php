<h3>Fornecedor</h3>

{{-- Fica o comentário que será descartado pelo interpretador do blade. --}}

{{-- @php
    // Para comentários de uma linha.
    /*
        Para comentários de múltiplas linhas.
    */
    echo 'Texto de teste';
@endphp --}}

{{-- @dd($fornecedores) --}}

{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existe alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrrados</h3>
@else
    <h3>Não existem fornecedores cadastrados.</h3>
@endif --}}
{{-- <br>
@if (!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endif
<br>
@unless ($fornecedores[0]['status'] == 'S') <!-- se o retorno for falso -->
    Fornecedor Inativo
@endunless
<br> --}}

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
    @endisset
@endisset
