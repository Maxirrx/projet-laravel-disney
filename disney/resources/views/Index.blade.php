<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Style.css">
    <title>Liste des Animaux</title>
</head>
<body>
<a href="http://127.0.0.1:8000/create" class="create-button">Créer</a>
<div name="titre_tableau">
    <h1>Tableau des Animaux</h1>
</div>
<table class="tableauanimaux">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Description</th>
        <th>Date de Naissance</th>
        <th>Détails</th>
    </tr>
    @foreach($all as $row)
    <tr>
        <td>{{$row->id }}</td>
        <td>{{$row->name }}</td>
        <td>{{$row->price }}€</td>
        <td>{{$row->description }}</td>
        <td>{{$row->datenaissance }}</td>
        <td><a href="/{{$row->id}}">voir</a></td>
    </tr>
    @endforeach
</table>


</body>
</html>
