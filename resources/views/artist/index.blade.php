@extends('layouts.app')

@section('title', 'Liste des artists')

@section('contenu')
    <h1>Liste des {{ $resource }}</h1>

    <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
        @foreach($artists as $artist)
            <tr>
                <td>{{ $artist->firstName }}</td>
                <td>{{ $artist->lastName }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection