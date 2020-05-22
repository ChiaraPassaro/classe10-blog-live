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
        <table class="table">
          <thead>
            <th>Id</th>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Path</th>
            <th colspan="2">Azioni</th>
          </thead>
          <tbody>
            <tr>
              <td>{{$photo->id}}</td>
              <td>{{$photo->title}}</td>
              <td>{{$photo->description}}</td>
              <td>{{$photo->path}}</td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@section('footer')
    
@endsection