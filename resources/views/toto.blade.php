<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toto</title>
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

    <!-- content -->
    @yield('contenu');
</body>
</html>