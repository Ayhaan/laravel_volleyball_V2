@extends('layouts.index')

@section('content')
    <header>
        <h1>Show : {{ $joueur->prenom }}</h1>
        <a href="{{ route('joueur.index') }}" class="btn btn-secondary">back</a>
    </header>
    <div class="row my-5">
        <div class="col-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2>{{ $joueur->nom }} | {{ $joueur->prenom }} | {{ $joueur->age }}y | {{ $joueur->genre->type }}</h2>
                    <img class="card-img-top my-3" src="{{ asset('img/' . $joueur->photo->url) }}" alt="">
                    <p><b>Origine : </b>{{ $joueur->pays }} | <b>Tel: </b> +32 {{ $joueur->numero }}</p>
                    <p> <b>Statut : </b> {{ $joueur->equipe ? $joueur->equipe->nom : "Joueur libre" }} | {{ $joueur->role->nom }}</p>
                    <form action="{{ route('joueur.destroy', $joueur->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection