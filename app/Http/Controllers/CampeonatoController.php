<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Requests\CampeonatoEnviarRequest;
use App\Campeonato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CampeonatoController extends Controller
{

    public function index()
    {
        return view('campeonato.index');
    }

    public function adicionar(CampeonatoEnviarRequest $request, Campeonato $campeonato)
    {

        $campeonato->nome = strtoupper($request->get('nome'));
        $campeonato->categoria_id = $request->get('categoria_id');

        $campeonato->save();

        //echo "Campeonato " . $campeonato->id . " criado com sucesso.";

        return redirect()->action('CampeonatoController@listar');

    }

    public function listar()
    {
        return view('campeonato.lista', array('campeonatos' => Campeonato::all()));
//        return response()->json(Campeonato::all());
//        return Campeonato::all()->toJson();
        //return json_encode(Campeonato::all());

    }

    public function remover($id)
    {
        Campeonato::find($id)->delete();
        return redirect()->action('CampeonatoController@listar');
    }

    public function editar($id)
    {
        $campeonato = Campeonato::find($id);
        $categoria  = Categoria::all();

        return view('campeonato.editar', compact('campeonato', 'categoria'));

    }

    public function alterar($id, Request $request)
    {
        $campeonato = Campeonato::find($id);
        $campeonato->fill($request->all());
        //$campeonato->categoria_id = $request->get('id');
        $campeonato->nome = strtoupper($request->get('nome'));
        $campeonato->update();

        return redirect()->action('CampeonatoController@listar');
        dd($campeonato);
    }

}
