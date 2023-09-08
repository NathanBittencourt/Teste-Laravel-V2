{{-- herda a view base --}}
@extends('base')
{{-- define o conteúdo --}}
@section('content')
    {{-- caso exista a variável msg, exibe uma mensagem --}}
    @if (isset($msg))
    <h3 style="color: red" class="text-center">Série não encontrada!</h3>
    @else
    {{-- senão, mostra os dados --}}
    <h2 class="text-center">Mostrando dados da série</h2>

    <div class="container text-center" style="max-width: 700px; padding: 50px;">
        <h4><strong>Nome:</strong> {{ $serie->nome }} </h4>
        <h4><strong>Ano:</strong> {{ $serie->ano }} </h4>
        <h4><strong>Estúdio:</strong> {{ $serie->estudio }} </h4>
        <a href="{{ route('series.index') }}" class="btn btn-dark">Voltar</a>
    </div>

    @endif
@endsection