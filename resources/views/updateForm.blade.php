@extends('layouts.base')

@section('title', 'Liste bandes dessinées')
@section('css', 'addForm')

@section('content')

<h2>Ajoutez un nouveau personnage en remplissant ce formulaire</h2>

    <form action="/updateForm" method="POST">
    @csrf 

        <div> <label for="id">ID Update :</label>
            <input type="text" id="id" name="id" value={{ $character->id }}></div>
        <br>

        <div> <label for="name">Name Update :</label>
            <input type="text" id="name" name="name" value={{ $character->name }}></div>
        <br>

        <div><label for="creationYear">Creation Year Update :</label> 
             <input type="text" id="creationYear" name="creationYear" value={{ $character->creationYear }}></div>
        <br>

        <div><label for="cartoonName">Cartoon Name Update : </label>
            <input type="text" id="cartoonName" name="cartoonName" value={{ $character->cartoonName }}></div>
        <br>

        <div><label for="designer">Designer Update : </label>
            <input type="text" id="designer" name="designer" value={{ $character->designer->name }}></div>
        <br>

        <div><label for="details">Details Update : </label>
            <input type="text" id="details" name="details" value={{ $character->details }}></div>
        <br>

        <button type="submit" class="btn btn-primary"> Update </button>

    </form>

@endsection