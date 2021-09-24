@extends('layouts.base')

@section('title', 'List designers')
@section('css', 'table')

@section('content')

    <h1>Liste artists</h1>

    <table>
        <thread>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Année de naissance</th>
                <th scope="col">Nationalité</th>
                <th scope="col">Supprimer</th>
                <th scope="col">Mettre à jour</th>
            </tr>
        </thread>

        <tbody>
            @foreach ($designers as $designer)

            <tr>
                <td>{{ $designer->id }}</td>
                <td>{{ $designer->name }}</td>
                <td>{{ $designer->birthYear }}</td>
                <td>{{ $designer->nationality }}</td>

                <td>
                    <form action="/deleteDesigner" method="POST">
                    @csrf
          
                        <input type="hidden" name="id" value="{{ $designer->id }}">
                        <input type="submit" value="delete">
                    </form>
                </td>   

                <td><a href="/updateDesigner/{{ $designer->id }}" class="btn btn-primary"> Update</td>   
            </tr>

            @endforeach
        </tbody>
    </table>

@endsection