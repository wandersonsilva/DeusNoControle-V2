@extends('layout.template')
@section('conteudo')

    <h3>Adicionar Jogadores para o Sorteio do Campeonato</h3>

    <hr />

    <form action="{{ action('SorteioController@adicionar') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="nome">Campeonato a ser disputado</label>
            <select id="campeonato_id" name="campeonato_id" class="form-control">
                <option value="null">Selecione</option>

                @foreach(App\Campeonato::all() as $campeonato)
                    <option value="{{ $campeonato->id }}">{{ $campeonato->nome }}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="nome">Jogador</label>
            <select id="id_jogador" name="id_jogador" class="form-control">
                <option value="null">Selecione</option>

                @foreach(App\Participante::all() as $participante1)
                    <option value="{{ $participante1->id }}">{{ $participante1->nome }}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="nome">Número deste Jogador</label>
            <br />
            <input type="number" name="num_jogador" id="num_jogador">
        </div>


        <button type="submit" class="btn btn-success">Adicionar ao Sorteio</button>

    </form>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Número Jogador</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $sorteados = DB::table('sorteios as so')
            ->join('participantes as p', 'so.id_jogador', '=', 'p.id')
            ->select('p.nome', 'so.num_jogador')
            ->get();
        ?>
        @foreach($sorteados as $row)

            <tr>
                <td>{{ $row->nome}}</td>
                <td>{{ $row->num_jogador}}</td>
            </tr>

        @endforeach
        </tbody>

    </table>

@endsection