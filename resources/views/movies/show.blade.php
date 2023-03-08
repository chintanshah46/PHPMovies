<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
      <x-card class="p-10">
        <div class="flex flex-col items-center justify-center text-center">
          <img class="w-48 mr-6 mb-6"
            src="{{$movie->photo ? asset('storage/' . $movie->photo) : asset('/images/no-image.png')}}" alt="" />
  
          <h3 class="text-2xl mb-2">
            {{$movie->name}}
          </h3>
          <div class="text-xl font-bold mb-4">{{$movie->release_date}}</div>

          <div class="border border-gray-200 w-full mb-6"></div>

          <div>
            <h3 class="text-3xl font-bold mb-4">Description</h3>
            <div class="text-lg space-y-6">
              {{$movie->description}}
              
              @unless(count($actors) == 0)
  
              <x-movie-actors :actors="$actors" />
          
              @else
              <p>No Actors found</p>
              @endunless
            </div>
          </div>
        </div>
      </x-card>
    </div>
  </x-layout>