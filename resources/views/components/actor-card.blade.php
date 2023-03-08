@props(['actor'])

@php
    $movies = $actor->movies()->get();
@endphp

<x-card>
  <div class="flex">
    <img class="hidden w-48 mr-6 md:block"
      src="{{$actor->photo ? asset('storage/' . $actor->photo) : asset('/images/no-image.png')}}" alt="" />
    <div>
      <h3 class="text-2xl font-bold">
        <a href="/actors/{{$actor->id}}">{{$actor->name}}</a>
      </h3>

      <div class="text-xl mb-4">Birth Date: {{$actor->birth_date}}</div>

      <div class="text-lg mt-4">
        Birth Country: <i class="fa-solid fa-location-dot"></i> {{$actor->birth_place}}
      </div>
      
      <div class="text-xl mb-4">Description: {{substr($actor->description, 0, 200).'...'}}</div>

      @unless(count($movies) == 0)
  
      <x-actor-movies :movies="$movies" />
  
      @else
      <p>No Movies found</p>
      @endunless
    </div>
  </div>
</x-card>