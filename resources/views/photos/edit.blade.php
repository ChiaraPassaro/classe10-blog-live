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
        <form action="{{route('photos.update', $photo->id)}}" method="POST">
          @method('PUT')
          @csrf
            <div class="form-group">
              <label for="title">Titolo</label>
              <input type="text" name="title" class="form-control" value="{{$photo->title}}">
              @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
             
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="description" cols="30" rows="10"> {{$photo->description}}</textarea>
               @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="title">Path</label>
              <input type="text" name="path" class="form-control" value="{{$photo->path}}">
              @error('path')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <input class="btn btn-primary" type="submit" value="Salva">
        </form>
      </div>
    </div>
  </div>
@endsection

@section('footer')
    
@endsection