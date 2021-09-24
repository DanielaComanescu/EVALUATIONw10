@extends('layouts.base')

@section('title', 'Liste bandes dessinées')
@section('css', 'table')

@section('content')

    <h1>Liste bandes dessinées disponibles</h1>

    <table>
        <thread>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Année création</th>
                <th scope="col">Bande dessinée</th>
                <th scope="col">Dessinateur</th>
                <th scope="col">Supprimer</th>
                <th scope="col">Mettre à jour</th>
            </tr>
        </thread>

        <tbody>
            @foreach ($characters as $character)

            <tr>
                <td>{{ $character->id }}</td>
                <td><a href="/infoCharacter/{{ $character->id }}">{{ $character->name }}</td>
                <td>{{ $character->creationYear }}</td>
                <td>{{ $character->cartoonName }}</td>
                <td>{{ $character->designer->name }}</td>

                <td>
                    <form action="/delete" method="POST">
                    @csrf
          
                        <input type="hidden" name="id" value="{{ $character->id }}">
                        <input type="submit" value="delete">
                    </form>
                </td>   

                <td><a href="/update/{{ $character->id }}" class="btn btn-primary"> Update</td>   
            </tr>

            @endforeach
        </tbody>
    </table>

@endsection