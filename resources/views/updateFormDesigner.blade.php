@extends('layouts.base')

@section('title', 'Liste artists')
@section('css', 'addForm')

@section('content')

<h2>Ajoutez un nouveau artist en remplissant ce formulaire</h2>

    <form action="/updateFormDesigner{{ $designer->id }}" method="POST">
    @csrf 
        <br>

        <div> <label for="name">Name Update :</label>
            <input type="text" id="name" name="name" value="{{ $designer->name }}"></div>
        <br>

        <div><label for="birthYear">Birth Year Update :</label> 
             <input type="text" id="birthYear" name="birthYear" value="{{ $designer->birthYear }}"></div>
        <br>

        <div><label for="nationality">Nationality Update : </label>
            <input type="text" id="nationality" name="nationality" value="{{ $designer->nationality }}"></div>
        <br>

        <button type="submit" class="btn btn-primary"> Update </button>

    </form>

@endsection