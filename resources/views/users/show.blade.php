<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voir Utilisateur</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Détails de l'Utilisateur</h1>
    <p>ID : {{ $user->id }}</p>
    <p>Nom : {{ $user->nom }}</p>
    <p>Prénom : {{ $user->prenom }}</p>
    <p>Email : {{ $user->email }}</p>
    <p>Contact : {{ $user->contact }}</p>
    <p>Statut : {{ $user->statut }}</p>
    <p>Date de vérification de l'email : {{ $user->email_verified_at }}</p>
    <a href="{{ route('users.index') }}">Retour à la liste des utilisateurs</a>
</body>
</html>
