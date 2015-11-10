@extends('layout.template')
@section('conteudo')

    <h3>Categoria do Campeonato</h3>

    <hr />

    <form action="{{ action('CategoriaController@adicionar') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="nome">Categoria</label>
            <input type="text" id="nome" name="nome" class="form-control text-uppercase" placeholder="Categoria/Tipo">
        </div>


        <button type="submit" class="btn btn-default">Enviar</button>

    </form>

@endsection