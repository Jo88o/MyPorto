@extends('adminlte::page')

@section('content')
<form action="/caroussel" method="post" enctype="multipart/form-data">
@csrf
     <div style="height: 200px" class="">
        <h3>Image: </h3>
        <input type="file" name="src">
        <button type="submit">add</button>
    </div>
</form>

<div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($caroussel as $elem)
                    <th scope="row">{{$elem->id}}</th>
                    <td><img height="30px" width="30px" src="{{asset('img/'.$elem->src)}}" alt=""></td>
                    <td><a href="/caroussel/{{$elem->id}}/edit"><button type="submit" class="mt-3">edit</button></a></td>
                    <td><form action="/caroussel/{{$elem->id}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="mt-3">Delete</button>
                    </form></td>
                  </tbody>
                  @endforeach
                </table>
  </div>
@endsection