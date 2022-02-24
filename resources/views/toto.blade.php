<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        #menu{
            background-color: indigo;
            color: #fff;
        }
        #menu > li{
            display: inline-block;
            text-decoration: none;
        }
        a{
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- start menu -->
    <ul id="menu">
        <li><a href="/etudiant">Etudiant</a></li>
        <li><a href="#">Payement</a></li>
    </ul>
    <!-- end menu -->

    <!-- content --><a href="{{ route('etudiant') }}"><button>New Etudiant</button></a>
    @yield('contenu');
    
</body>
</html>