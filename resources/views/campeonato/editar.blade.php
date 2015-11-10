@extends('layout.template')
@section('conteudo')

    <h3>Alterar Campeonato: {{ $campeonato->nome }}</h3>

    <hr />

    <form action="{{ action('CampeonatoController@alterar', [$campeonato->id]) }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control text-uppercase" placeholder="Nome Campeonato/Local" value="{{ $campeonato->nome }}">
        </div>

        <div class="form-group">
            <label for="nome">Categoria</label>
            <select id="categoria_id" name="categoria_id" class="form-control">
                <option value="{{$campeonato->categoria_id }}">{{ $campeonato->categoria['nome'] }}</option>

                @foreach(App\Categoria::all() as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach

            </select>
        </div>


        <button type="submit" class="btn btn-success">Atualizar</button>

    </form>

@endsection