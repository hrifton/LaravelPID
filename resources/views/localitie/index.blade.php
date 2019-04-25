@extends('layouts.app')

@section('title', 'Liste des localités')

@section('contenu')
    <h1>Liste des {{ $resource }}</h1>

    <table>
        <thead>
            <tr>
                <th>Code postale</th>
                <th>localités</th>
            </tr>
        </thead>
        <tbody>
        @foreach($localities as $localitie)
            <tr>
                <td>{{ $localitie->postal_code }}</td>
                <td>{{ $localitie->locality }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection