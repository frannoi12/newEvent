<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Entreprises</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Liste des Entreprises</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Pays</th>
                <th>Ville</th>
                <th>Quartier</th>
                <th>Adresse</th>
                <th>User</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($entreprises as $une_entreprise)
                <tr>
                    <td>{{ $une_entreprise->nom }}</td>
                    <td>{{ $une_entreprise->pays }}</td>
                    <td>{{ $une_entreprise->ville }}</td>
                    <td>{{ $une_entreprise->quartier }}</td>
                    <td>{{ $une_entreprise->adresse }}</td>
                    <td>{{ $une_entreprise->user ? $une_entreprise->user->nom : 'Aucun utilisateur associé' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Aucune entreprise disponible</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
