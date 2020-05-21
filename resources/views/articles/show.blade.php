<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">  
        <h2>{{$article->title}}</h2>
        <small>Scritto da {{$article->author}}</small>
        <div>
          {!! $article->body !!}
          {{-- {{$article->body}} --}}
        </div>
        <img src="{{$article->img}}" alt="{{$article->title}}">
      </div>
    </div>
  </div>
  
</body>
</html>