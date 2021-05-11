@extends('layouts.index')

@section('content')
    <header class="mb-4">
        <h1>admin equipes</h1>
        <a href="{{ route('admin') }}" class="btn btn-secondary">back dashboard</a>
        <a href="{{ route('equipe.create') }}" class="btn btn-success">Add equipe</a>
    </header>
    @include('layouts.flash')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">ville</th>
            <th scope="col">pays</th>
            <th scope="col">Espace max</th>
            <th scope="col">Nombre de joueurs</th>
            <th scope="col">Nombre ATT</th>
            <th scope="col">Nombre CT</th>
            <th scope="col">Nombre DC</th>
            <th scope="col">Nombre RP</th>
            <th scope="col">continent</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($equipes as $equipe)
            <tr>
              <th scope="row">{{ $equipe->id }}</th>
              <td>{{ $equipe->nom }}</td>
              <td>{{ $equipe->ville }}</td>
              <td>{{ $equipe->pays }}</td>
              <td>{{ $equipe->max }}</td>
              <td>{{ count($equipe->joueurs)}}</td>
              <td>{{ $equipe->ATT }}</td>
              <td>{{ $equipe->CT }}</td>
              <td>{{ $equipe->DC }}</td>
              <td>{{ $equipe->RP }}</td>
              <td>{{ $equipe->continent->nom }}</td>
              <td class="d-flex justify-content-center">
                <a href="{{ route('equipe.show', $equipe->id) }}" class="btn btn-primary">show</a>
                <a href="{{ route('equipe.edit', $equipe->id) }}" class="btn btn-success">edit</a>
                <form action="{{ route('equipe.destroy', $equipe->id) }}" method="POST">
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