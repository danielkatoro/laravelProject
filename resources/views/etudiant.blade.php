
@extends('toto');
@section('contenu')
@if(Session::has('message'))
    <div class="alert alert-primary">Insere avec succes</div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $item)
        <p>{{$item}}</p>
        @endforeach
    </div>
@endif

<form id="monForm">
    @csrf
    <input type="text" id="noms" placeholder="Nom de l'etudiant" name="noms">
    <input type="number" id="age" placeholder="age" name="age">
    <input type="submit" value="Enregistrer">
</form>

<h3>Liste des etudiants</h3>
<table class="table">

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
@section('monScript')
<script>
    $('#monForm').submit(function (event){
        event.preventDefault();

        $.ajax({
            url: '{{ route("store_etudiant") }}',
            method:"POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache:false,
            headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},

            success: function (data){
                alert('Inserted successfully');
                $('#monForm')[0].reset();
            }
        });
    });
</script>
@endsection