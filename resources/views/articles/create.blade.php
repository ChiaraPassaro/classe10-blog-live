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
<form action="{{route('articles.store')}}" method="POST">
  @csrf
  @method('POST')
    <div>
      <label for="title">Titolo</label>
      <input type="text" placeholder="Inserisci i titolo" name="title">
      @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>
    <div>
      <label for="title">Testo</label>
      <textarea name="body" cols="30" rows="10">Inserisci il testo</textarea>
    </div>
    <div>
      <label for="title">Autore</label>
      <input type="text" placeholder="Inserisci il nome dell'autore" name="author">
    </div>
    <div>
      <label for="title">Location</label>
      <input type="text" placeholder="La tua posizione" name="location">
    </div>
    <div>
      <label for="title">Immagine</label>
      <input type="text" placeholder="Inserisci il path" name="img">
    </div>
    <div>
      <label for="not-published">Non Pubblicato</label>
      <input type="radio" id="not-published" name="published" value="0">
      <label for="published">Pubblicato</label>
      <input type="radio" id="published" name="published" value="1">
    </div>
    <div>
      <input type="submit" value="Salva">
    </div>
  </form>
</body>
</html>