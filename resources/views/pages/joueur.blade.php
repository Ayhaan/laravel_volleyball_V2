@extends('layouts.index')
@section('content')
    <header>
        @include('partials.nav')
        <h1>Coté client : All joueurs</h1>
        <p>tous les joueurs disponibles</p>
    </header>

    <div class="row">
        @foreach ($joueurs as $joueur)
            <div class="col-4 card">
                <div class="card-body">
                    <h5 class="card-title">{{ $joueur->nom }}  {{ $joueur->prenom }} | {{ $joueur->age }}y</h5>
                    @if ($joueur->equipe)
                        <h6 class="card-subtitle mb-2 text-muted"><b>Equipe : </b> <a href="{{ route('showEquipe', $joueur->equipe->id) }}">{{ $joueur->equipe->nom}}</a> </h6>   
                    @else   
                        <h6><b>Joueur libre</b></h6>
                    @endif
                    <hr>      
                    <a href="{{ route('showJoueur', $joueur->id) }}" class="btn btn-primary">Show du joueur</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection