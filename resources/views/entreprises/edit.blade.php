<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Entreprise</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Modifier Entreprise</h1>
    <form action="{{ route('entreprises.update', $entreprise->id) }}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="{{ $entreprise->nom ?? old('nom')}}">
        </div>
        <div>
            <label for="pays">Pays :</label>
            <input type="text" id="pays" name="pays" value="{{ $entreprise->pays ?? old('pays')}}" >
        </div>
        <div>
            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" value="{{ $entreprise->ville ?? old('ville')}}" >
        </div>
        <div>
            <label for="quartier">Quartier :</label>
            <input type="text" id="quartier" name="quartier" value="{{ $entreprise->quartier ?? old('quartier') }}" >
        </div>
        <div>
            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" value="{{ $entreprise->adresse ?? old('adresse') }}" >
        </div>
        <div>
            <label for="user">User :</label>
            <select id="user_id" name="user_id" >
                @foreach($users as $user)
                    <option value="{{ $user->id ?? old('user_id')}}" {{ $entreprise->user->id == $user->id ? 'selected' : '' }}>{{ $user->nom }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Mettre à jour</button>
        </div>
    </form>
</body>
</html>
