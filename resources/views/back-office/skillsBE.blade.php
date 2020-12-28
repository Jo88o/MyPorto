@extends('adminlte::page')

@section('content')
<form action="/skills/{{$datas->id}}" method="POST">
@csrf
@method('PUT')
   <div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Skills</th>
        </tr>
      </thead>
      <tbody>
                    <th scope="row">{{$datas->id}}</th>
                    <td><input type="text" value="{{$datas->texte}}" name="texte"></td>

                    <td><button type="submit" class="mt-3">modifier</button></td>
                  </tbody>
                </table>
  </div>
</form>
@endsection

