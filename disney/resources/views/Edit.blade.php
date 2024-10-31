<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Stylecreate.css">
    <title>Document</title>
</head>
<body>
<a href="http://127.0.0.1:8000/disneys" class="back-button">Retour</a>

<div class="form-container">
    <h2>Modifier </h2>
    <form action="/disneys/{{$find->id}}" method="post">
        @csrf
        @method('patch')
        <label for="name">Nom</label>
        <input required value="{{$find->name}}" type="text" id="name" name="animal_name"  required>
        @error('animal_name')<div class="error">{{$message}} </div>@enderror

        <label for="price">Prix</label>
        <input required value="{{$find->price}}" type="number" id="price" name="animal_price"  required>
        @error('animal_price')<div class="error">{{$message}} </div>@enderror

        <label for="description">Description</label>
        <textarea required id="description" name="animal_description"  required>{{$find->description}}</textarea>
        @error('animal_description')<div class="error">{{$message}} </div>@enderror

        <label for="image">URL de l'image</label>
        <input required value="{{$find->image}}"type="text" id="image" name="animal_image"  required>
        @error('animal_image')<div class="error">{{$message}} </div>@enderror

        <label for="datenaissance">Date de Naissance</label>
        <input required value="{{$find->datenaissance}}"type="date" id="datenaissance" name="animal_date" required>
        @error('animal_date')<div class="error">{{$message}} </div>@enderror

        <button type="submit">Modifier le Personnage</button>
    </form>
</div>

</body>
</html>
