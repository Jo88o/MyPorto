@extends('adminlte::page')

@section('content')
<form action="/contact/{{$datas->id}}" method="POST">
@method('PUT')
@csrf
    <div>
        <h3>Map: </h3>
        <input type="text" name="map" value="{{$datas->map}}">
        <h3>Titre:</h3>
        <input type="text" name="titre" value="{{$datas->titre}}">
        <h3>Phone: </h3>
        <input type="number" name="phone" value="{{$datas->phone}}">
        <button type="submit">modifier</button>
    </div>
</form>
    
@endsection