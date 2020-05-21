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
        <table class="table">
          <thead>
            <th>Titolo</th>
            <th>Autore</th>
            <th colspan="3">Azioni</th>
          </thead>
          <tbody>
            @foreach ($articles as $article)
                <tr>
                  <td>{{$article->title}}</td>
                  <td>Scritto da {{$article->author}}</td>
                  <td><a href="{{route('articles.edit', $article->id)}}">Modifica</a></td>
                  <td><a href="{{route('articles.show', $article->slug)}}">Visualizza</a></td>
                <td><form action="{{route('articles.destroy', $article->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit">Elimina</button>
                </form></td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
</body>
</html>