<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaEnviarRequest;
use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{

    public function index()
    {
        return view('categoria.index');
    }

    public function adicionar(CategoriaEnviarRequest $request, Categoria $categoria)
    {

        $categoria->nome = strtoupper($request->get('nome'));

        $categoria->save();

//        echo "Categoria Salva com Sucesso " . $categoria->id;
        return redirect()->action('CategoriaController@listar');

    }

    public function listar()
    {
        return view('categoria.lista', array('categorias' => Categoria::all()));
    }

}
