{{-- herda a view 'base' --}}
@extends('base')
{{-- cria a seção content, definida na base, para injetar o código --}}
@section('content')
    <h2 class="text-center">Cadastrar Nova Série</h2>
    {{-- o atributo action aponta para a rota que está direcionada ao método store do controlador --}}

    <div class="container text-center" style="max-width: 700px; padding: 50px;">
        <div class="row">
            <div class="col">
                <form action="{{ route('series.store') }}" method="POST" enctype="multipart/form-data" class="form container">
                {{-- CSRF é um token de segurança para validar o formulário --}}
                @csrf
                    <div class="row">
                        <div class="col-12 mb-3">
                            <input class="form-control border-dark" name="nome" id="nome" type="text" placeholder="Nome">
                            <input class="form-control border-dark" name="ano" id="ano" type="number" placeholder="Ano">
                            <input class="form-control border-dark" name="estudio" id="estudio" type="text" placeholder="Estúdio">
                            <button class="btn btn-primary" type="submit" value="Salvar">Salvar</button>
                            <button class="btn btn-success" type="reset" value="Limpar">Limpar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection