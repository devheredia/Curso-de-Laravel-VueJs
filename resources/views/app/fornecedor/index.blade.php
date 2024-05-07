<h3>Fornecedor</h3>

{{-- Comentário ignorado pelo Blade. --}}

{{-- @php
    // Comentário de uma linha.
    /*
        Comentário de múltiplas linhas.
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
    Fornecedor inativoz
@endif
<br>
@unless ($fornecedores[0]['status'] == 'S')     Fornecedor Inativo
@endunless
<br> --}}

@isset($fornecedores)
    @for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        {{-- @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
    @endisset --}}
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido.' }}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] }}) {{ $fornecedores[$i]['telefone'] }}
        <hr>
        {{-- @switch($fornecedores[2]['ddd'])
        @case('11')
            São Paulo - SP
        @break

        @case('32')
            Juiz de Fora - MG
        @break

        @case('85')
            Fortaleza - Ceará
        @break

        @default
            Estado não identificado.
    @endswitch --}}

        <br>
    @endfor
@endisset
