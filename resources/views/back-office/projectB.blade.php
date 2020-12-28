@extends('adminlte::page')

@section('content')
    <div class="border d-flex">
        <form action="/projects" method="post" class="m-5" enctype="multipart/form-data">
        @csrf
            <h3>Image :</h3>
            <input type="file" name="src">
            <h3>Nom du projet :</h3>
            <input type="text" name="nom" value="nom">
            <br>
            {{-- <h3>Image :</h3>
            <input class="mt-3" type="file"> --}}
            <h3>Description :</h3>
            <input style="width: 400px" type="text" name="description" value="description">
            <h3>Tags :</h3>
            {{-- <input type="text" name="tags"> --}}
            <select name="tags" type="text">
              @foreach ($skills as $elem)
                  <option value="{{$elem->texte}}" name="texte">{{$elem->texte}}</option>
              @endforeach
            </select>
            <br>
            <button type="submit" class="mt-3">Add</button>
        </form>
    </div>

    <div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">Tags</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($projects as $elem)
                      <th scope="row">{{$elem->id}}</th>
                      <td><img height="30px" width="30px" src="{{asset('img/'.$elem->src)}}" alt=""></td>
                      <td>{{$elem->nom}}</td>
                      <td>{{$elem->description}}</td>
                      <td>{{$elem->tags}}</td>
                      <td><a href="/projects/{{$elem->id}}/edit"><button type="submit" class="mt-3">edit</button></a></td>
                      <td><form action="/projects/{{$elem->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="mt-3">Delete</button>
                      </form></td>
                    </tbody>
                    @endforeach
                  </table>
    </div>
@endsection

