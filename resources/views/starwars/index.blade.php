<x-layout>

    @include('partials._hero')
  
    @include('partials._search', ['from'=> 'starwars'])
  
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
  
      @unless( !isset($data))
  
      @foreach($data as $row)
      <x-sw-card :row="$row" />
      @endforeach
  
      @else
      <p>No StarWars found</p>
      @endunless
  
    </div>
  
  </x-layout>