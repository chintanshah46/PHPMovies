<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
      <x-card class="p-10">
        <div class="flex flex-col items-center justify-center text-center">
          <img class="w-48 mr-6 mb-6"
            src="{{$actor->photo ? asset('storage/' . $actor->photo) : asset('/images/no-image.png')}}" alt="" />
  
          <h3 class="text-2xl mb-2">
            {{$actor->name}}
          </h3>
          <div class="text-xl font-bold mb-4">{{$actor->birth_date}}</div>
  
          <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot"></i> {{$actor->birth_place}}
          </div>
          <div class="border border-gray-200 w-full mb-6"></div>
          <div>
            <h3 class="text-3xl font-bold mb-4">Description</h3>
            <div class="text-lg space-y-6">
              {{$actor->description}}

              @unless(count($movies) == 0)
  
              <x-actor-movies :movies="$movies" />
          
              @else
              <p>No Movies found</p>
              @endunless
            </div>
          </div>
        </div>
      </x-card>
    </div>
  </x-layout>