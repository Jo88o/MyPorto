@extends('adminlte::page')

@section('content')
    <div class="border">
        @foreach ($datas as $elem)
        <form action="/about-me/{{$elem->id}}/edit" method="GET" class="m-5">
        @csrf
            <h3>Image :</h3>
            <img height="200px" width="250px" src="{{asset('img/'.$elem->src)}}" alt="">
            <br>
            <h3>Texte :</h3>
            <p class="text-dark">{{$elem->texte}}</p>
            <button type="submit" class="mt-3">Edit</button>
        </form>
        @endforeach
    </div>
@endsection