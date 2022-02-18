@extends('toto');
@section('contenu')
<h2>Hello from Etudiant</h2>

<form action="{{ route('store_etudiant') }}" method="POST">
    @csrf
    <input type="text" placeholder="Nom de l'etudiant" name="noms">
    <input type="number" placeholder="age" name="age">
    <input type="submit" value="Enregistrer">
</form>

@stop