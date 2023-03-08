@props(['movies'])

<ul class="flex">
    @foreach($movies as $movie)
    <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
      <a href="/movies/{{$movie->id}}/">{{$movie->name}}</a>
    </li>
    @endforeach
</ul>