@extends('layouts.base')


@section('Profiles')
    <table class="table container mt-5">
        <thead>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Creer a</th>
            <th>Modifier</th>
        </thead>
        <tbody>
            @foreach ($Profiles as $profile)
                <tr>
                    <td>{{ $profile->Nom }}</td>
                    <td>{{ $profile->Prenom }}</td>
                    <td>{{ $profile->Email }}</td>
                    <td>{{ $profile->created_at }}</td>
                    <td></td>
                </tr>
            @endforeach
    </table>
@endsection