<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Stylesolo.css">
    <title>Document</title>
</head>
<body>
<a href="http://127.0.0.1:8000/disneys" class="back-button">Retour</a>
<a href="http://127.0.0.1:8000/disneys/{{$find->id}}/edit" class="update-button">Modifier</a>
<div class="image">
    <img src="/{{$find->image}}">
</div>
<div class="animal-info">
    <div class="info-item">
        <strong>ID:</strong> {{$find->id }}
    </div>
    <div class="info-item">
        <strong>Nom:</strong> {{$find->name}}
    </div>
    <div class="info-item">
        <strong>Prix:</strong> {{$find->price}}€
    </div>
    <div class="info-item">
        <strong>Description:</strong> {{$find->description}}
    </div>
    <div class="info-item">
        <strong>Date de Naissance:</strong> {{$find->datenaissance}}
    </div>
</div>

</body>
</html>
