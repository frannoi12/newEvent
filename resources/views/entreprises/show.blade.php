<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voir Entreprise</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Détails de l'Entreprise</h1>
    <p>ID : {{ $entreprise->id}}</p>
    <p>Nom: {{ $entreprise->nom }}</p>
    <p>Pays: {{ $entreprise->pays }}</p>
    <p>Ville: {{ $entreprise->ville }}</p>
    <p>Quartier: {{ $entreprise->quartier }}</p>
    <p>Adresse: {{ $entreprise->adresse }}</p>
    <p>User: {{ $entreprise->user->nom }}</p>
    <a href="{{ route('entreprises.index') }}">Retour à la liste des entreprises</a>
</body>
</html>
