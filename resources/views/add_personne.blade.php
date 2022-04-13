<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ajouter une personne</title>
</head>
<body>
    <div class="container mt-5 col-4">
        <h4>Ajouter une Personne</h4>
        <div>
            <form action="{{route('personne.add')}}" class="form" method="post">
                <div class="form-group">
                    <label class="small" for="nom">Nom</label>
                    <input class="form-control" type="text" name="nom" id="nom" placeholder="@exemple">
                </div>
                <div class="form-group">
                    <label class="small" for="nationalite">Nationalite</label>
                    <select class="form-control" name="nationalite" id="nationalite">
                        <option value="Congolaise">Congoliase</option>
                        <option value="Congolaise">Française</option>
                        <option value="Congolaise">Rwandaise</option>
                        <option value="Congolaise">Ougandaise</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="small" for="age">Age</label>
                    <input class="form-control" type="number" min="1" step="1" name="age" id="age">
                </div><br>
                <div class="form-group">
                    <input class="form-control btn btn-primary" type="submit" value="Enregistrer">
                </div>
            </form>
        </div>
    </div>
    
    
</body>
</html>