@extends('layouts.layout')

@section('erreur')
    @if(session('erreur'))
        <div class="erreur">{{ session('erreur') }}</div>
    @endif
@endsection

@section('header-dashboard')
    <h2>Voiture :</h2>
@endsection

@section('content')
    <div class="infos">
    @include('partials.info-voiture', [
        'infoTitre' => 'Modele',
        'infoValeur' => $voiture->modele
    ])

    @include('partials.info-voiture', [
        'infoTitre' => 'Nombre places',
        'infoValeur' => $voiture->nb_places
    ])
    </div>

    <h3>Propriétaire :</h3>
    @include('partials.infos-employe', [
        'nom' => $voiture->employe->nom,
        'prenom' => $voiture->employe->prenom,
        'email' =>  $voiture->employe->email,
        'nbVoiture' => $voiture->employe->nombreVoiture()
    ])
@endsection



