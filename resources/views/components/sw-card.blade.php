@props(['row'])

<x-card>
  <div class="flex">
    <img class="hidden w-48 mr-6 md:block"
      src="{{asset('/images/no-image.png')}}" alt="" />
    <div>
      <h3 class="text-2xl font-bold">{{$row['name']}}</h3>

      <div class="text-xl mb-4">Birth Year: {{$row['birth_year']}}</div>
      <div class="text-xl mb-4">Eye Color: {{$row['eye_color']}}</div>
      <div class="text-xl mb-4">Gender: {{$row['gender']}}</div>
      <div class="text-xl mb-4">Hair Color: {{$row['hair_color']}}</div>
      <div class="text-xl mb-4">Height: {{$row['height']}}</div>
      <div class="text-xl mb-4">Weight: {{$row['mass']}}</div>
      <div class="text-xl mb-4">Skin Color: {{$row['skin_color']}}</div>
      <div class="text-xl mb-4">Url: {{$row['url']}}</div>

    </div>
  </div>
</x-card>