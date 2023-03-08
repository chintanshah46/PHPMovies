<x-layout>

    @include('partials._hero')
  
    @include('partials._search', ['from'=> 'movies'])
  
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
  
      @unless(count($movies) == 0)
  
      @foreach($movies as $movie)
      <x-movie-card :movie="$movie" />
      @endforeach
  
      @else
      <p>No movies found</p>
      @endunless
  
    </div>
  
  </x-layout>