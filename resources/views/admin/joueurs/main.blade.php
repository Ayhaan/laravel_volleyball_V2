@extends('layouts.index')

@section('content')
    <header class="mb-4">
        <h1>admin joueurs</h1>
        <a href="{{ route('admin') }}" class="btn btn-secondary">back dashboard</a>
        <a href="{{ route('joueur.create') }}" class="btn btn-success">Add joueur</a>
    </header>
    @include('layouts.flash')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">prenom</th>
            <th scope="col">age</th>
            <th scope="col">tel</th>
            <th scope="col">genre</th>
            <th scope="col">pays</th>
            <th scope="col">role</th>
            <th scope="col">equipe</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($joueurs as $joueur)
            <tr>
              <th scope="row">{{ $joueur->id }}</th>
              <td>{{ $joueur->nom }}</td>
              <td>{{ $joueur->prenom }}</td>
              <td>{{ $joueur->age }}</td>
              <td>+32 {{ $joueur->numero }}</td>
              <td>{{ $joueur->genre->type }}</td>
              <td>{{ $joueur->pays }}</td>
              <td>{{ $joueur->role->nom }}</td>
              <td>{{ $joueur->equipe ? $joueur->equipe->nom : "/" }}</td>
              <td class="d-flex justify-content-center">
                <a href="{{ route('joueur.show', $joueur->id) }}" class="btn btn-primary">show</a>
                <a href="{{ route('joueur.edit', $joueur->id) }}" class="btn btn-success">edit</a>
                <form action="{{ route('joueur.destroy', $joueur->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>     
            @endforeach
        </tbody>
      </table>
@endsection