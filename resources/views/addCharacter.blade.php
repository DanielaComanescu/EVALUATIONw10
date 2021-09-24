@extends('layouts.base')

@section('title', 'Liste bandes dessinées')
@section('css', 'addForm')

@section('content')

<h2>Ajoutez un nouveau personnage en remplissant ce formulaire</h2>

    <form action="/newCharacter" method="POST">
    @csrf 
        <div> <label for="name">Name :</label>
            <input type="text" id="name" name="name"></div>
        <br>

        <div><label for="creationYear">Creation Year :</label> 
             <input type="text" id="creationYear" name="creationYear"></div>
        <br>

        <div><label for="cartoonName">Cartoon Name : </label>
            <input type="text" id="cartoonName" name="cartoonName"></div>
        <br>

        <div><label for="designer">Designer : </label>
            <input type="text" id="designer" name="designer"></div>
        <br>

        <div><label for="details">Details : </label>
            <input type="text" id="details" name="details"></div>
        <br>

        <button type="submit" class="btn btn-primary"> AJOUTER </button>

    </form>

@endsection