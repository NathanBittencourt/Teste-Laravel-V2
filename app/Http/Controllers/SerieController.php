<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recuperando as séries do banco de dados
        $series = Serie::all();
        // Retorna a view index passando a variável $series
        return view('series.index')->with('series', $series);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mostrando o formulário de cadastro
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Instancia um novo model Serie
        $serie = new Serie();
        // Pega os dados vindos do form e seta no model
        $serie->nome = $request->input('nome');
        $serie->ano = $request->input('ano');
        $serie->estudio = $request->input('estudio');
        // Persiste o model na base de dados
        $serie->save();
        // Retorna a view com uma variável msg que será tratada na própria view
        $series = Serie::all();
        return view('series.index')->with('series', $series)
            ->with('msg', 'Série cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Recupera a série da base de dados
        $serie = Serie::find($id);
        // Se encontrar a série, retorna a view com o objeto correspondente
        if ($serie) {
            return view('series.show')->with('serie', $serie);
        } else {
            // Senão, retorna a view com uma mensagem que será exibida.
            return view('series.show')->with('msg', 'Série não encontrada!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Recupera a série da base de dados
        $serie = Serie::find($id);
        // Se encontrar a série, retorna a view de edição com o objeto correspondente
        if ($serie) {
            return view('series.edit')->with('serie', $serie);
        } else {
            // Senão, retorna a view de edição com uma mensagem que será exibida.
            $series = Serie::all();
            return view('series.index')->with('series', $series)
                ->with('msg', 'Série não encontrada!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Recupera a série mediante o id
        $serie = Serie::find($id);
        // Atualiza os atributos do objeto recuperado com os dados do objeto Request
        $serie->nome = $request->input('nome');
        $serie->ano = $request->input('ano');
        $serie->estudio = $request->input('estudio');
        // persite as alterações na base de dados
        $serie->save();
        // Retorna a view index com uma mensagem
        $series = Serie::all();
        return view('series.index')->with('series', $series)
            ->with('msg', 'Série atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Recupera o recurso a ser excluído
        $serie = Serie::find($id);
        // Exclui o recurso
        $serie->delete();
        // Retorna à view index.
        $series = Serie::all();
        return view('series.index')->with('series', $series)
            ->with('msg', "Série excluída com sucesso!");
    }
}
