@extends('toto');
@section('contenu')
<h2>Hello from Etudiant</h2>

<ul>
    @foreach($etudiants as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
@stop