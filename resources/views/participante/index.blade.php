@extends('layout.template')
@section('conteudo')

    <h3>Novo Participante</h3>

    <hr />

    <form action="{{ action('ParticipanteController@adicionar') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="nome">Participante</label>
            <input type="text" id="nome" name="nome" class="form-control text-uppercase" placeholder="Nome do Participante">
        </div>


        <button type="submit" class="btn btn-default">Enviar</button>

    </form>

@endsection