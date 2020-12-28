@extends('adminlte::page')

@section('content')
    <div style="height: 200px" class="border">
        <form action="/presentation/{{$datas->id}}" class="m-5" method="post">
        @method('PUT')
        @csrf
            <h3>Texte :</h3>
            <input style="width: 800px" type="text" name="texte" value="{{$datas->texte}}">
            <br>
            <button type="submit" class="mt-3">modifier</button>
        </form>
    </div>
@endsection