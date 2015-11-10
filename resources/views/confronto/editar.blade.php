@extends('layout.template')
@section('conteudo')

    <h3>Alterar Confronto: {{ $confronto->id }}</h3>

    <hr />

    <form action="#" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="nome">Participante 1</label>



                @foreach(App\participante::all() as $participante1)
                    {{ $participante1->id }}">{{ $participante1->nome }}<br />
                @endforeach


        </div>


        <button type="submit" class="btn btn-success">Atualizar</button>

    </form>

@endsection