<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Comics</title>
</head>
<body>
    <h1>Home Comics</h1>
    <h2>La lista dei fumetti</h2>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <div class="title">Titolo: {{$comic -> title}}</div>
                <div class="author">Autore: {{$comic -> author}}</div>
                <div class="release_date">Data di pubblicazione: {{$comic -> release_date}}</div>
                <div class="pages">Numero di pagine: {{$comic -> pages}}</div>
            </li><br>
        @endforeach
    </ul>
</body>
</html>