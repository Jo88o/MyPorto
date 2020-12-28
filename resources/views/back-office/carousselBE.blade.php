@extends('adminlte::page')

@section('content')
    <form action="/caroussel/{{$edit->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf    
    <div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Image</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">{{$edit->id}}</th>
              <td><input type="file" name="src"></td>
              <td><button type="submit" class="mt-3">modifier</button></td>
            </tbody>
        </table>
      </div>
    </form>
@endsection