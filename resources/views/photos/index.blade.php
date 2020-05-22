@extends('layouts.layout')

@section('title')
    {{$title}}
@endsection

@section('header')
  <div class="container">
    <div class="row">
      <div class="col-12">  
        <h2>{{$title}}</h2>
      </div>
    </div>
  </div>
@endsection

@section('main')
  <div class="container">
    <div class="row">
      <div class="col-12"> 
        {{$photos->links()}} 
        <table class="table">
          <thead>
            <th>Id</th>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Path</th>
            <th colspan="3">Azioni</th>
          </thead>
          <tbody>
            @foreach ($photos as $photo)
                <tr>
                  <td>{{$photo->id}}</td>
                  <td>{{$photo->title}}</td>
                  <td>{{$photo->description}}</td>
                  <td>{{$photo->path}}</td>
                  <td><a class="btn btn-primary" href="{{route('photos.show', $photo->id)}}">Visualizza</a></td>
                <td><a class="btn btn-secondary"  href="{{route('photos.edit', $photo->id)}}">Modifica</a></td>
                  <td>
                    <form action="{{route('photos.destroy', $photo->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input class="btn btn-danger" type="submit" value="Elimina">
                    </form>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
        {{$photos->links()}}
      </div>
    </div>
  </div>
@endsection

@section('footer')
    
@endsection