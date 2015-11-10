@extends('layout.template')
@section('conteudo')

    <h3>Listagem de Campeonatos</h3>

    <hr />

    <a href="{{ action('CampeonatoController@index') }}" class="btn btn-success" style="margin-bottom:10px;">Novo Campeonato</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Número</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Data</th>

        </tr>
        </thead>
        <tbody>

        @foreach($campeonatos as $row)
            <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->nome }}</td>
                <td>{{ $row->categoria['nome'] }}</td>
                <td>{{ $row->created_at->format('d/m/Y') }}</td>
                <td>
                    <a href="{{ action('CampeonatoController@editar', [$row->id]) }}" class="btn btn-info">Alterar</a>
                    <a href="{{ action('CampeonatoController@remover', [$row->id]) }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection