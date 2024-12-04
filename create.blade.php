@extends('layouts.app')
@section('title')
Ajouter un Diplome
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
    <h2 style="color: black">Ajouter un Diplome</h2>
    @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="card shadow-sm">
    <div class="card-body">
<form action="{{ route('diplomes.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nom de Diplome:</label>
        <input type="text" class="form-control " id="name" name="name" ><br>
        <button type="submit" class="btn " style="background-color:#9E602C;color:#ffff">Ajouter</button>
        <a href="{{route('diplomes.index')}}" class="btn" style="background:rgba(251, 148, 54, 0.70); color:#FFFF">Annuler</a>
    </form>
    </div>
        </div>
    </div>
        </div>
    </div>
    </div>

@endsection