<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Utilisateurs</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Liste des Utilisateurs</h1>
    <form action="{{ route("users.create") }}" method="post">
        @csrf
        @method("GET")
        <button style="background: rgb(58, 245, 73); color: white; padding: 5px; margin: 5px">Ajouter</button>
    </form>
    <form action="{{ route("users.exportExcel") }}">
        @csrf
        @method("get")
        <button style="background: red; color: whitesmoke; padding: 5px; margin: 5px" >Exporter en Excell</button>
    </form>
    <form action="{{ route("users.exportPdf") }}" method="post">
        @csrf
        @method("GET")
        <button style="background: rgb(59, 150, 56); color: white; padding: 5px; margin: 5px">Exporter en PDF</button>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nom }}</td>
                <td>{{ $user->prenom }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->contact }}</td>
                <td>{{ $user->statut }}</td>
                <td>
                    <form action="{{ route('users.show', $user->id) }}">
                        @csrf
                        <button>Voir</button>
                    </form>

                    <form action="{{ route('users.edit', $user->id) }}">
                        @csrf
                        <button>Editer</button>
                    </form>
                    <form action="{{ route('users.delete', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
