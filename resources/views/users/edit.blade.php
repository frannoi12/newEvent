<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Éditer un Utilisateur</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Éditer un Utilisateur</h1>
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="{{ $user->nom }}" required>
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" value="{{ $user->prenom }}" required>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div>
            <label for="contact">Contact :</label>
            <input type="text" id="contact" name="contact" value="{{ $user->contact }}" required>
        </div>
        <div>
            <label for="statut">Statut :</label>
            <select id="statut" name="statut" required>
                <option value="user" {{ $user->statut == 'user' ? 'selected' : '' }}>User</option>
                <option value="admin" {{ $user->statut == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>
        <div>
            <label for="password">Mot de passe (laisser vide pour ne pas changer) :</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="password_confirmation">Confirmer le mot de passe :</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        <div>
            <button type="submit">Mettre à jour</button>
        </div>
    </form>
</body>
</html>
