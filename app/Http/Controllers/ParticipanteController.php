<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParticipanteEnviarRequest;
use App\Participante;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ParticipanteController extends Controller
{

    public function index()
    {
        return view('participante.index');
    }

    public function adicionar(ParticipanteEnviarRequest $request, Participante $participante)
    {

        $participante->nome = strtoupper($request->get('nome'));
        $participante->save();

        return redirect()->action('ParticipanteController@listar');

    }

    public function listar()
    {

        return view('participante.lista', array('participantes' => Participante::all()));

    }

    public function remover($id)
    {
        Participante::find($id)->delete();
        return redirect()->action('ParticipanteController@listar');
    }


}
