@extends('layout.template')
@section('conteudo')

    <h3>Novo Confronto</h3>

    <hr />

    <form action="{{ action('ConfrontoController@adicionar') }}" method="POST">
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
            <label for="nome">Primeiro Jogador</label>
            <select id="p1_id" name="p1_id" class="form-control">
                <option value="null">Selecione</option>

                @foreach(App\Participante::all() as $participante1)
                    <option value="{{ $participante1->id }}">{{ $participante1->nome }}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="nome">Segundo Jogador</label>
            <select id="p2_id" name="p2_id" class="form-control">
                <option value="null">Selecione</option>

                @foreach(App\Participante::all() as $participante2)
                    <option value="{{ $participante2->id }}">{{ $participante2->nome }}</option>
                @endforeach

            </select>
        </div>


        <button type="submit" class="btn btn-success">Cadastrar Confronto</button>

    </form>

@endsection