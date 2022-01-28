@extends('layouts.base')

@section('title', 'Liste bandes dessinées')
@section('css', 'table')

@section('content')

    <h1>Liste bandes dessinées disponibles</h1>

    <div class="table-responsive">
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
                <td>{{ $character->designer }}</td>

                <td><div class="btn">
                    <form action="/delete/{{ $character->id }}" method="POST">
                    @csrf
                        <button type="submit" class="btn btn-primary"> Delete</button>
                    </form>
                </td></div>  

                <td><div class="btn"><a href="/update/{{ $character->id }}"> Update</div></td> 
            </tr>

            @endforeach
        </tbody>
    </table>
    </div>

@endsection