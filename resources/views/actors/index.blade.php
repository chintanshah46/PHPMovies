<x-layout>

    @include('partials._hero')
  
    @include('partials._search', ['from'=> 'actors'])
  
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
  
      @unless(count($actors) == 0)
  
      @foreach($actors as $actor)
      <x-actor-card :actor="$actor" />
      @endforeach
  
      @else
      <p>No actors found</p>
      @endunless
  
    </div>
  

  </x-layout>