@extends('layouts.layout')

@section('title','Liste des employes')

@section('erreur')
    @if(session('erreur'))
        <div class="erreur">{{ session('erreur')  }}</div>
    @endif
@endsection

@section('header-dashboard')
    <h1>Liste des employes</h1>
@endsection

@section('content')
    <table>
        <thead>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Détails</th>
        </thead>
        <tbody>
        @foreach($employes as $employe)
            <tr>
                <td>{{ $employe->nom }}</td>
                <td>{{ $employe->prenom }}</td>
                <td>{{ $employe->email }}</td>
                <td><a href="{{ route('employes.show', [$employe->id]) }}">Voir</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
