@extends('app')

@section('content')

    
  <div class="row">
    <div class="input-field col s12">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <input autocomplete="off" name="name" id="name" type="text" class="validate">
      <label class="active" for="name">Поиск</label>
    </div>
  </div>


<table>
        <thead>
          <tr>
              <th>ID</th>
              <th>Название</th>
              <th>Вес</th>
              <th>Цена</th>
              <th>Удаление</th>
          </tr>
        </thead>

        <tbody id="products">
        @foreach($products as $product)
          <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->weight}}</td>
            <td>{{$product->price}}</td>
            <td><a class="waves-effect waves-light btn red" href="{{url('/product/delete/' . $product->id)}}">Это ьблять Удаление</a></td>
          </tr>
        @endforeach 
        </tbody>
      </table>
@endsection