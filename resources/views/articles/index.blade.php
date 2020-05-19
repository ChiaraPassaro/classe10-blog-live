<ul>
@foreach ($articles as $article)
    <li>
      <h2>{{$article->title}}</h2>
      <small>Scritto da {{$article->author}}</small>
    </li>
@endforeach
</ul>
