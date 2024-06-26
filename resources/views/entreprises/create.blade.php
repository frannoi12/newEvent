<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter une Entreprise</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <style>
        .failed_input{
            border: solid 1px red ;
        }
    </style>
    <h1>Ajouter une Nouvelle Entreprise</h1>
    <form action="{{ route('entreprises.store') }}" method="post">
        @csrf
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="{{ old('nom') }}" class=" @error('nom') failed_input @enderror">
            @error('nom')
            <span style="color: red;">Champ requis</span>
            @enderror
        </div>
        <div>
            <label for="pays">Pays :</label>
            <input type="text" id="pays" name="pays" value="{{ old('pays') }}" class=" @error('pays') failed_input @enderror">
            @error('pays')
            <span style="color: red;">Champ requis</span>
            @enderror
        </div>
        <div>
            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" value="{{ old('ville') }}" class=" @error('ville') failed_input @enderror">
            @error('ville')
            <span style="color: red;">Champ requis</span>
            @enderror
        </div>
        <div>
            <label for="quartier">Quartier :</label>
            <input type="text" id="quartier" name="quartier" value="{{ old('quartier') }}" class=" @error('quartier') failed_input @enderror">
            @error('quartier')
            <span style="color: red;">Champ requis</span>
            @enderror
        </div>
        <div>
            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" value="{{ old('adresse') }}" class=" @error('adresse') failed_input @enderror">
            @error('adresse')
            <span style="color: red;">Champ requis</span>
            @enderror
        </div>
        <div>
            <label for="user_id">User :</label>
            <select id="user_id" name="user_id" class=" @error('user_id') failed_input @enderror">
                <option value="">Sélectionné un utilisateur</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->nom }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Ajouter</button>
        </div>
    </form>
</body>
</html>
