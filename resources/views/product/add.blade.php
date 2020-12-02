@extends('app')

@section('content')
<h4 class="center">Добавление товара</h4>
<form method="POST" class="col s12">

    {{ csrf_field() }}
    <div class="row">
        <div class="input-field col s12">
        <input autocomplete="off" name="name" id="name" type="text" required>
        <label for="name">Название</label>    
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
        <input autocomplete="off" name="weight" id="weight" type="text" required>
        <label for="weight">Вес</label>    
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
        <input autocomplete="off" name="price" id="price" type="text" required>
        <label for="price">Цена</label>    
        </div>
    </div>
    <button type="submit" class="waves-effect waves-light btn center">Добавить</button>
</form>

@endsection