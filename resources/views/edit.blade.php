<form action="{{ route('updateEtudiant') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$etudiant->id}}">
    <input value="{{$etudiant->noms}}" type="text" placeholder="Nom de l'etudiant" name="noms">
    <input value="{{$etudiant->age}}" type="number" placeholder="age" name="age">
    <input type="submit" value="Enregistrer">
</form>