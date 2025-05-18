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
                            <form action="{{ route('profiles.delete', $profile->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            

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
