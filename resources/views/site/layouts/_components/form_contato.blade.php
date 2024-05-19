{{ $slot }}
<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="{{ $classe }}" value="{{ old('nome') }}">
    @if ($errors->has('nome'))
        <div class="error">{{ $errors->first('nome') }}</div>
    @endif
    <br>

    <input name="telefone" type="text" placeholder="Telefone" class="{{ $classe }}" value="{{ old('telefone') }}">
    @if ($errors->has('telefone'))
        <div class="error">{{ $errors->first('telefone') }}</div>
    @endif
    <br>

    <input name="email" type="text" placeholder="E-mail" class="{{ $classe }}" value="{{ old('email') }}">
    @if ($errors->has('email'))
        <div class="error">{{ $errors->first('email') }}</div>
    @endif
    <br>

    <select name="motivo_contatos_id" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contato as $motivo)
            <option value="{{ $motivo->id }}" {{ old('motivo_contatos_id') == $motivo->id ? 'selected' : '' }}>
                {{ $motivo->motivo_contato }}
            </option>
        @endforeach
    </select>
    @if ($errors->has('motivo_contatos_id'))
        <div class="error">{{ $errors->first('motivo_contatos_id') }}</div>
    @endif
    <br>

    <textarea name="mensagem" class="{{ $classe }}">{{ old('mensagem') != '' ? old('mensagem') : 'Preencha aqui a sua mensagem' }}</textarea>
    @if ($errors->has('mensagem'))
        <div class="error">{{ $errors->first('mensagem') }}</div>
    @endif
    <br>

    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>

@if ($errors->any())
    <div style="position: absolute; top: 0px; left: 0px; width: 100%; background-color: red; margin-bottom: 50px;">
        @foreach ($errors->all() as $erro )
            <div>{{ $erro }}</div>
        @endforeach
    </div>
@endif
