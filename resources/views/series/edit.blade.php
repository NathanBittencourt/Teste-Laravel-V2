{{-- herda a view 'base' --}}
@extends('base')
{{-- cria a seção content, definida na base, para injetar o código --}}
@section('content')
<h2 class="text-center">Atualizar uma Série</h2>
{{-- o atributo action aponta para a rota que está direcionada ao método store do controlador --}}
<div class="container text-center" style="max-width: 700px; padding: 50px;">
    <div class="row">
        <div class="col">
            <form action="{{ route('series.update', $serie->id) }}" method="POST" enctype="multipart/form-data" class="form container">
                {{-- CSRF é um token de segurança para validar o formulário --}}
                @csrf
                {{-- o método de atualização é o PUT --}}
                @method('PUT')
                <div class="row">
                    <div class="col-12 mb-3">
                        <input class="form-control border-dark" type="text" name="nome" id="nome" required value="{{ $serie->nome }}" placeholder="Nome">
                        <input class="form-control border-dark" type="number" name="ano" id="ano" required value="{{ $serie->ano }}" placeholder="Ano">
                        <input class="form-control border-dark" type="text" name="estudio" id="estudio" required value="{{ $serie->estudio }}" placeholder="Estúdio">
                        </form>
                        {{-- note que os botões estão fora dos forms. O atributo form indica qual form o botão pertence --}}
                        <button class="btn btn-success" type="submit" value="Salvar">Salvar</button>
                        <button class="btn btn-danger" form="delete-form" type="submit" value="Excluir">Excluir</button>
                        <a href="{{ route('series.index') }}" class="btn btn-dark">Voltar</a>
                        {{-- form para exclusão --}}
                        <form method="POST" class="form" id="delete-form" action="{{ route('series.destroy', $serie->id) }}">
                            @csrf
                            {{-- o método HTTP para exclusão deve ser o DELETE --}}
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection