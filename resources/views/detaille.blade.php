@extends('layouts.base')

@section('title') DetailleDeProfile @endsection

@section('MonProfile')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4>Détails du Profil</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Nom:</strong> {{ $profile->Nom }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $profile->Email }}</li>
                        <li class="list-group-item"><strong>Date d'inscription:</strong> {{ $profile->created_at->format('d/m/Y') }}</li>
                        {{-- Ajoutez d'autres champs utilisateur ici si nécessaire --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection