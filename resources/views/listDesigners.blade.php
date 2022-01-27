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

                <td><div class="btn">
                    <form action="/deleteDesigner/{{ $designer->id }}" method="POST">
                    @csrf
                        <button type="submit" class="btn btn-primary"> Delete</button>
                    </form>
                </td></div>  

                <td><div class="btn"><a href="/modifierDesigner/{{ $designer->id }}"> Update</div></td>   
            </tr>

            @endforeach
        </tbody>
    </table>

@endsection