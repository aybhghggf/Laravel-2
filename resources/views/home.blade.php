@extends('layouts.base')
@section('title') Home  @endsection


@section('home')
<div class="max-w-md mx-auto mt-10">
    <form method="POST" action="{{ route('create') }}"  class="bg-white shadow-sm p-5 rounded border mx-auto" style="max-width: 450px;">
        @csrf
        <div class="mb-4">
            <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
            <input type="text" name="nom" id="nom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Entrez le nom">
        </div>
        <div class="mb-4">
            <label for="prenom" class="block text-gray-700 text-sm font-bold mb-2">Prenom:</label>
            <input type="text" name="prenom" id="prenom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Entrez le prénom">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
            <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Entrez l'email">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
            <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Entrez le mot de passe">
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Ajouter
            </button>
        </div>
    </form>
</div>

@endsection