<?php

namespace App\Http\Controllers;

use App\Sorteio;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SorteioController extends Controller
{

    public function index()
    {
        return view('sorteio.index');
    }

    public function adicionar(Request $request, Sorteio $sorteio)
    {

        $sorteio->campeonato_id = $request->get('campeonato_id');
        $sorteio->id_jogador    = $request->get('id_jogador');
        $sorteio->num_jogador   = $request->get('num_jogador');

        $sorteio->save();

        return redirect()->action('SorteioController@index');
//        dd($sorteio);
        //dd($sorteados);

    }

    public function listaSorteados()
    {
        $sorteados = DB::table('sorteios as so')
            ->join('participantes as p', 'so.id_jogador', '=', 'p.id')
            ->select('p.nome', 'so.num_jogador')
            ->get();
    }

}
