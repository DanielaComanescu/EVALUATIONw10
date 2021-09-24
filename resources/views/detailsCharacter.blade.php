@extends('layouts.base')

@section('title', 'Liste bandes dessinées')
@section('css', 'table')

@section('content')

<h1> Pour plus d'infos sur votre bd</h1>

    <table>
        <thread>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Détails</th>
            </tr>
        </thread>

        <tbody>
            <tr>
                <td> {{ $character->id }} </th>
                <td> {{ $character->name }} </th>
                <td> {{ $character->details }} </th>
            </tr>
        </tbody>
    </table>

@endsection