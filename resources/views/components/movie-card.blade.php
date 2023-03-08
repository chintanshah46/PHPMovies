@props(['movie'])

@php
    $actors = $movie->actors()->get();
@endphp

<x-card>
  <div class="flex">
    <img class="hidden w-48 mr-6 md:block"
      src="{{$movie->photo ? asset('storage/' . $movie->photo) : asset('/images/no-image.png')}}" alt="" />
    <div>
      <h3 class="text-2xl font-bold">
        <a href="/movies/{{$movie->id}}">{{$movie->name}}</a>
      </h3>

      <div class="text-xl mb-4">Release Date: {{$movie->release_date}}</div>
      
      <div class="text-xl mb-4">Description: {{substr($movie->description, 0, 200).'...'}}</div>

      @unless(count($actors) == 0)
  
      <x-movie-actors :actors="$actors" />
  
      @else
      <p>No Actors found</p>
      @endunless
    </div>
  </div>
</x-card>