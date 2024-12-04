@extends('layouts.app')
@section('title')
les divisions
@endsection
@section('content')
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success">{{session("success")}}</div>
       @endif
        <h2>Liste des Divisions</h2>
        <a href="{{ route('divisions.create') }}" class="btn mb-3" style="background-color:#9E602C;color:#ffff">Ajouter une Division</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($divisions as $div)
                    <tr>
                        <td>{{ $div->id }}</td>
                        <td>{{ $div->nom_div }}</td>
                        <td>
                            <a href="{{ route('divisions.edit', $div->id) }}" class="btn btn-sm" style="background-color:#9E602C;color:#ffff" title="Modifier"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('divisions.destroy', $div->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer" onclick="return confirm('Êtes-vous sûr ?')"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
