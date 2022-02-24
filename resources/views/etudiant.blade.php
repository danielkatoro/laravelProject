
@extends('toto');
@section('contenu')
<h2>Hello from Etudiant</h2>
@if(Session::has('message'))
    <div class="alert alert-primary">Insere avec succes</div>
@endif

<form action="{{ route('store_etudiant') }}" method="POST">
    @csrf
    <input type="text" placeholder="Nom de l'etudiant" name="noms">
    <input type="number" placeholder="age" name="age">
    <input type="submit" value="Enregistrer">
</form>

<h3>Liste des etudiants</h3>
<table>

<thead>
    <th>Noms</th>
    <th>Age</th>
    <th>Action</th>
</thead>
<tbody>
@foreach($etudiants as $item)
    <tr>
        <td>{{ $item->noms}}</td>
        <td>{{ $item->age}}</td>
        <td>Edit || Delete</td>
    </tr>
    @endforeach
</tbody>
    
</table>
@stop