@extends('layouts.base')

@section('title', 'Liste artists')
@section('css', 'addForm')

@section('content')

<h2>Ajoutez un nouveau artist en remplissant ce formulaire</h2>

    <form action="/newDesigner" method="POST">
    @csrf 
        <div> <label for="name">Name :</label>
            <input type="text" id="name" name="name"></div>
        <br>

        <div><label for="birthYear">Birth Year :</label> 
             <input type="text" id="birthYear" name="birthYear"></div>
        <br>

        <div><label for="nationality">Nationality : </label>
            <input type="text" id="nationality" name="nationality"></div>
        <br>

        <button type="submit" class="btn btn-primary"> AJOUTER </button>

    </form>

@endsection