<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entreprises</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1> {{ $title }}</h1>
    <form action="{{ route("entreprises.create") }}" method="post">
        @csrf
        @method("GET")
        <button style="background: rgb(58, 245, 73); color: white; padding: 5px; margin: 5px">Ajouter</button>
    </form>

    <form action="{{ route("entreprises.collection") }}">
        @csrf
        @method("get")
        <button style="background: red; color: whitesmoke; padding: 5px; margin: 5px" >Exporter en Excell</button>
    </form>

    <form action="{{ route("entreprises.pdfexport") }}" method="post">
        @csrf
        @method("GET")
        <button style="background: red; color: whitesmoke; padding: 5px; margin: 5px">Exporter en PDF</button>
    </form>
    <table border="1">
        <thead>
            <th>Nom</th>
            <th>Pays</th>
            <th>Ville</th>
            <th>Quartier</th>
            <th>Adresse</th>
            <th>User</th>
            <th>Action</th>
        </thead>
        <tbody>
            @forelse ( $liste_entreprises as $une_entreprise)
            <tr>
                <td>{{$une_entreprise->nom}}</td>
                <td>{{$une_entreprise->pays}}</td>
                <td>{{$une_entreprise->ville}}</td>
                <td>{{$une_entreprise->quartier}}</td>
                <td>{{$une_entreprise->adresse}}</td>
                <td>{{ $une_entreprise->user ? $une_entreprise->user->nom : 'Aucun utilisateur associé' }}</td>
                <td>
                    <form action="{{route('entreprises.show', $une_entreprise->id) }}">
                        @csrf
                        {{-- {{ $une_entreprise->id }} --}}
                        <button type="submit">voir</button>
                    </form>
                    <form action="{{route('entreprises.edit', $une_entreprise->id) }}">
                        @csrf
                        {{-- @dd($une_entreprise->id) --}}
                        <button type="submit">Edit</button>
                    </form>
                    <form action="{{ route("entreprises.delete",$une_entreprise->id) }}" method="post">
                        @csrf
                        @method("DELETE")
                        <button style="background: red; color: white; padding: 5px; margin: 5px">Suprimer</button>
                    </form>
                </td>
            </tr>
            @empty
            <p>Aucune entreprises</p>
            @endforelse
        </tbody>
    </table>
</body>
</html>
