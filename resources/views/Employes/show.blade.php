@extends('layouts.layout')

@section('title', 'Profil Employe')

@section('erreur')
    @if(session('erreur'))
        <div class="erreur">{{ session('erreur') }}</div>
    @endif
@endsection

@section('header-dashboard')
    <h2>Profil Employe</h2>
@endsection

@section('content')

    @include('partials.infos-employe', [
        'nom' => $employe->nom,
        'prenom' => $employe->prenom,
        'email' => $employe->email,
        'nbVoiture' => $nbVoiture
    ])

    <div>
        <h4>Activité :</h4>
        <div>Statut : {{ $statut }}</div>
    </div>

    <div>
        <h4>Voiture :</h4>
        <form action="{{ route('employes.verifier', [ $employe->id ]) }}" method="GET">
            <input name="modele" type="text">
            <button type="submit">Vérifier</button>
        </form>

        @isset($modeleExiste)
            <div>{{ $modeleExiste }}</div>
        @endisset
    </div>

    <br>

    @foreach($voitures as $voiture)
        <label>
            {{ $voiture->modele }}
            <a href="{{ route('voitures.show', [$voiture->id]) }}">Voir</a>
        </label>
    @endforeach
@endsection



