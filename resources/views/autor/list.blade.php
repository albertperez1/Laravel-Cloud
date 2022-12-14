@extends('layout')
@section('title', 'Llistat d Autors')

@section('stylesheets')
    @parent
@endsection

@section('content')
    <h1>Llistat d'Autors</h1>
    <a href="{{ route('autor_new') }}">+ Nou Autor</a>

    @if (session('status'))
        <div>
            <strong>Success!</strong> {{ session('status') }}  
        </div>
    @endif

    <table style="margin-top: 20px;margin-bottom: 10px;">
        <thead>
            <tr>
                <th>Nom</th><th>Cognoms</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($autors as $autor)
                <tr>
                    <td>{{ $autor->nom }}</td><td>{{ $autor->cognoms }}</td>
                    <td>
                        <a href="{{ route('autor_delete', ['id' => $autor->id]) }}">Eliminar</a>
                        <a href="{{ route('autor_edit', ['id' => $autor->id]) }}">Editar</a>
                    </td>

                    
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
@endsection