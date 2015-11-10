@extends('layout.template')
@section('conteudo')

    <h3>Listagem de Confrontos</h3>

    <hr />
    <a href="{{ action('ConfrontoController@index') }}" class="btn btn-success" style="margin-bottom:10px;">Novo Confronto</a>
    <table class="table table-striped">

        <tbody>
        @foreach($confronto as $row)
                <tr>
                    <td>{{ $row->nome1 }}<small> (J{{ $row->num_jogador1 }})</small></td>
                    <td>{{ $row->pontos_p1 }}</td>
                    <td>{{ $row->nome2 }}<small> (J{{ $row->num_jogador2 }})</small></td>
                    <td>{{ $row->pontos_p2 }}</td>
                    <td>
                        <a href="#" class="btn btn-warning">Alterar Placar</a>
                        <a href="#" class="btn btn-info">Alterar</a>
                        <a href="#" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
        @endforeach


        </tbody>


    </table>

@endsection