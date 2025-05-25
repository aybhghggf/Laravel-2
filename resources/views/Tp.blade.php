@extends('layouts.base')
@section('title') Tous les profils @endsection
@section('Profiles')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    <div class="container mt-5">
        <div class="row">
            @foreach ($Profiles as $profile)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $profile->Nom }} {{ $profile->Prenom }}</h5>
                            <p class="card-text"><strong>Email:</strong> {{ $profile->Email }}</p>
                            <p class="card-text"><strong>Créé le:</strong> {{ $profile->created_at }}</p>
                            <a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-primary">Detaille</a>
                            <form action="{{ route('profiles.delete', $profile->id) }}" method="post" class="inline-block">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">
                                    Supprimer
                                </button>
                            </form>
                            <a href="{{ route('update.show', $profile->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Modifier
                            </a>
                            

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination links -->
        <div class="d-flex justify-content-center">
            {{ $Profiles->links() }}
        </div>
    </div>
@endsection
