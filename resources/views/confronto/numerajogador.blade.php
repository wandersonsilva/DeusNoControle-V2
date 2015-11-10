@extends('layout.template')
@section('conteudo')

    <h3>Enumeração dos Participantes do Campeonato</h3>

    <hr />
    <form action="{{ action('ConfrontoController@adicionarNumeracao') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
        </tr>
        </thead>
        <tbody>
        @foreach($numerar as $row)
            <input  type="hidden" name="id" value="{{ $row->id }}">
            <tr>

                <td>{{ $row->nome1 }} (J{{ $row->num_jogador1 }})</td>
                <td>
                    <input type="number" name="numero1" id="numero" value="{{ $row->num_jogador1 }}">
                    <input type="hidden" name="p1_id" id="p1_id" value="{{ $row->p1_id }}">
                </td>

            </tr>
            <tr>
                <td>{{ $row->nome2 }} (J{{ $row->num_jogador2 }})</td>
                <td>
                    <input type="number" name="numero2" id="numero" value="{{ $row->num_jogador2 }}">
                    <input type="hidden" name="p2_id" id="p2_id" value="{{ $row->p2_id }}">
                </td>
            </tr>
        @endforeach
        </tbody>
        <button type="submit" class="btn btn-info">Salvar</button>
    </table>
    </form>

@endsection