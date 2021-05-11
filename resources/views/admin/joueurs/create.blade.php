@extends('layouts.index')

@section('content')
    <h1>Ajout d'un joueur</h1>
    <a href="{{ route('joueur.index') }}" class="btn btn-secondary">back</a>
    @include('layouts.flash')
    <form action="{{ route('joueur.store') }}" method="POST" class="w-75 mx-auto row" enctype="multipart/form-data">
        @csrf
        <div class="col-6">
            <div class="form-group">
                <label for="nom">Nom du joueur</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}" placeholder="Entrer le nom">
                @error('nom')
                    <span class="text-danger small">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="prenom">Prénom du joueur</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom') }}" placeholder="Entrer le prenom">
                @error('prenom')
                    <span class="text-danger small">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="age">L'age</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}" placeholder="Entrer l'age">
                @error('age')
                    <span class="text-danger small">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="numero">Le numéro</label>
                <input type="number" class="form-control" id="numero" name="numero" value="{{ old('numero') }}" placeholder="Entrer le numero">
                @error('numero')
                    <span class="text-danger small">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="pays">Le pays d'origine</label>
                <input type="text" class="form-control" id="pays" name="pays" value="{{ old('pays') }}" placeholder="Entrer le pays">
                @error('pays')
                    <span class="text-danger small">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="genre_id">Le sexe</label>
                <select class="form-control" id="genre_id" name="genre_id">
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->type }}</option>   
                    @endforeach
                </select>
                @error('genre_id')
                    <span class="text-danger small">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="role_id">Role</label>
                <select class="form-control" id="role_id" name="role_id">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->nom }}</option>   
                    @endforeach
                </select>
                @error('role_id')
                    <span class="text-danger small">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
              </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="equipe_id">L'equipe</label>
                <select class="form-control" id="equipe_id" name="equipe_id">
                    @foreach ($equipes as $equipe)
                        <option value="{{ $equipe->id }}">{{ $equipe->nom }}</option>   
                    @endforeach
                </select>
                @error('equipe_id')
                    <span class="text-danger small">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="url">Photo</label>
                <input type="file" name="url">
            </div>
            @error('url')
                <span class="text-danger small">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection