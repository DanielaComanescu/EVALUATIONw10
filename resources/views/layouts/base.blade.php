<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/CSS/style.css">
        <link rel="stylesheet" href="/CSS/@yield('css').css">

        <title>@yield('title')</title>

    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/"> Accueil</a></li>
                    <li><a href="/list"> Nos personnages bandes dessinées</a></li>
                    <li><a href="/addCharacter"> Ajouter personnage</a></li>
                    <li><a href="/listDesigners"> Nos artists</a></li>
                    <li><a href="/addDesigner"> Ajouter artist</a></li>
                </ul>
            </nav>
        </header>

    <main>
        @yield('content')
        
    </main>

    <script src="/js/bootstrap.min.js"></script>
    </body>
</html>