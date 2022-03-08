<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New animal</title>
</head>

<body>

    <form action="{{route('store_animal')}}" method="post">
        @csrf
        <input type="text" name="nom">
        <input type="text" name="espece">
        <input type="submit" value="Enregistrer" id="">
    </form>
</body>

</html>