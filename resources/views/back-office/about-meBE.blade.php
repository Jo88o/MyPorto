@extends('adminlte::page')

@section('content')
<div class="border">
    <form action="/about-me/{{$datas->id}}" method="post" class="m-5" enctype="multipart/form-data">
    @method('PUT')
    @csrf
        <h3>Image: </h3>
        <input type="file" name="src">
        <h3>Texte: </h3>
        <input style="width: 800px" type="text" name="texte" value="{{$datas->texte}}">
        <br>
        <button class="mt-3" type="submit">Modifier</button>
        </form>
</div>
@endsection