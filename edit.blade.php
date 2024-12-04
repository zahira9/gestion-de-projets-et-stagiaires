@extends('layouts.app')
@section('title')
Modifier un Etablissment
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 style="color:black">Modifier un Etablisment</h2>
            <div class="card">
                

                <div class="card-body">
                    <form method="POST" action="{{ route('etablissement.update', $Etablissements->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom de Etablissement:') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$Etablissements->name}}"  autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn " style="background-color:#9E602C;color:#ffff">
                                    {{ __('Enregistrer') }}
                                </button>
                                <button type="reset" class="btn ml-2" style="background:rgba(251, 148, 54, 0.70);color:#FFFF">
                                    {{ __('Reset') }}
                                </button>
                                <a href="{{ route('etablissement.index') }}" class="btn btn-danger ml-2">
                                    {{ __('Annuler') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection