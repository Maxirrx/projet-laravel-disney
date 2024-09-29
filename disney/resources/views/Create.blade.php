<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Stylecreate.css">
    <title>Document</title>
</head>
<body>
<a href="http://127.0.0.1:8000/" class="back-button">Retour</a>

<div class="form-container">
    <h2>Créer un Personnage Disney</h2>
    <form action="/" method="POST">
        @csrf
        <label for="name">Nom</label>
        <input required value="{{old('animal_name')}}" type="text" id="name" name="animal_name"  required>
        @error('animal_name')
        <style>.error {background: red;}</style><div class="error">{{$message}} </div>@enderror
        <label for="price">Prix</label>
        <input required value="{{old('animal_price')}}" type="number" id="price" name="animal_price"  required>
        @error('animal_price')
        <style>.error {background: red;}</style><div class="error">{{$message}} </div>@enderror
        <label for="description">Description</label>
        <textarea required value="{{old('animal_description')}}"id="description" name="animal_description"  required></textarea>
        @error('animal_description')
        <style>.error {background: red;}</style><div class="error">{{$message}} </div>@enderror
        <label for="image">URL de l'image</label>
        <input required value="{{old('animal_image')}}"type="text" id="image" name="animal_image"  required>
        @error('animal_image')
        <style>.error {background: red;}</style><div class="error">{{$message}} </div>@enderror
        <label for="datenaissance">Date de Naissance</label>
        <input required value="{{old('animal_date')}}"type="date" id="datenaissance" name="animal_date" required>
        @error('animal_date')
        <style>.error {background: red;}</style><div class="error">{{$message}} </div>@enderror
        <button type="submit">Créer le Personnage</button>
    </form>
</div>

</body>
</html>
