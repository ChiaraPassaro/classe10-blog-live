<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
<form action="{{route('articles.update', $article->id)}}" method="POST">
  @csrf
  @method('PUT')
    <div>
      <label for="title">Titolo</label>
      <input type="text" placeholder="Inserisci i titolo" name="title" value="{{ (!empty(old('title') )) ?  old('title') : $article->title }}">
      @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>
    <div>
      <label for="body">Testo</label>
      {{-- <textarea name="body" cols="30" rows="10">{{ (!empty(old('body'))) ?  old('body') : 'Inserisci un testo' }}</textarea> --}}
      <textarea name="body" cols="30" rows="10">{{$article->body}}</textarea>
    </div>
    <div>
      <label for="title">Autore</label>
      <input type="text" placeholder="Inserisci il nome dell'autore" name="author" value="{{$article->author}}">
    </div>
    <div>
      <label for="title">Location</label>
      <input type="text" placeholder="La tua posizione" name="location" value="{{ $article->location }}">
    </div>
    <div>
      <label for="title">Immagine</label>
      <input type="text" placeholder="Inserisci il path" name="img" value="{{ $article->img }}">
    </div>
    <div>
      <label for="not-published">Non Pubblicato</label>
      <input type="radio" id="not-published" name="published" value="0" {{($article->published == 0) ? 'checked' : ''}}>
      <label for="published">Pubblicato</label>
      <input type="radio" id="published" name="published" value="1" {{($article->published == 1) ? 'checked' : ''}}>
    </div>
    <div>
      <input type="submit" value="Salva">
    </div>
  </form>
</body>
</html>