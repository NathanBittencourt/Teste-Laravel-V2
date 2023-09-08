{{-- herda a view 'base' --}}
@extends('base')
{{-- cria a seção content, definida na base, para injetar o código --}}
@section('content')
<h2 class="text-center">Séries Cadastradas</h2>
{{-- se a variável $series não existir, mostra um h3 com uma mensagem --}}
@if (!isset($series))
<h3 style="color: red">Nenhum Registro Encontrado!</h3>
{{-- senão, monta a tabela com o dados --}}
@else
<table id="listaProduto" class="table table-bordered table-condensed table-striped table-sm border-black" style="width: 100% !important;">
    <thead>
        <tr>
            <th class="text-center">Nome</th>
            <th class="text-center">Ano</th>
            <th class="text-center">Estúdio</th>
            <th colspan="3" class="text-center">Opções</th>
        </tr>
    </thead>
    <tbody>
        {{-- itera sobre a coleção de séries --}}
        @foreach ($series as $s)
        <tr>
            <td class="text-center">{{ $s->nome }} </td>
            <td class="text-center"> {{ $s->ano }} </td>
            <td class="text-center"> {{ $s->estudio }} </td>
            {{-- vai para a rota show, passando o id como parâmetro --}}
            <td class="text-center"><a href="{{ route('series.show', $s->id) }}" class="btn btn-primary">Exibir</a></td>
            <td class="text-center"><a href="{{ route('series.edit', $s->id) }}" class="btn btn-success">Editar</a></td>
            <td class="text-center">
            <button form="delete-form-{{ $s->id }}" type="submit" value="Excluir" class="btn btn-danger">Excluir</button>
            {{-- form para exclusão --}}
            <form method="POST" class="form" id="delete-form-{{ $s->id }}" action="{{ route('series.destroy', $s->id) }}">
                @csrf
                {{-- o método HTTP para exclusão deve ser o DELETE --}}
                @method('DELETE')
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            {{-- mostra a qtde de séries cadastradas. --}}
            <th colspan="6" class="text-black text-center">Séries Cadastradas: {{ $series->count() }}</th>
        </tr>
    </tfoot>
</table>

@endif
@if(isset($msg))
<script>
    alert("{{$msg}}");
</script>
@endif
@endsection