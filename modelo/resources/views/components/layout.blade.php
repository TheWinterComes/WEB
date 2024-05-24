<html>
    <head>
        <title>{{$title}} </title>
        <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
    </head>
    <body>
        <nav>
            <h3>Bem Vindo ao meu site</h3>
            <hr>
            </nav>
            {{ $slot }}
            <footer>
            <hr/>
            2024 Victor Correia
            </footer>
        </body>
</html>