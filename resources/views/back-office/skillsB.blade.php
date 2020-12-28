@extends('adminlte::page')

@section('content')
<form action="/skills" method="post">
@csrf
     <div class="border">
            <h3>Skills :</h3>
            <input type="text" name="texte">
            <br>
            <button type="submit" class="mt-3">Add</button>
    </div>
</form>


    <div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Skills</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($skills as $elem)
                        <th scope="row">{{$elem->id}}</th>
                        <td><p>{{$elem->texte}}</p></td>

                        <td><a href="/skills/{{$elem->id}}/edit"><button type="submit" class="mt-3">edit</button></a></td>
                        <td><form action="/skills/{{$elem->id}}" method="post">
                          @csrf
                          @method('delete')
                          <button type="submit" class="mt-3">Delete</button>
                        </form></td>
                      </tbody>
                      @endforeach
                    </table>
      </div>
@endsection