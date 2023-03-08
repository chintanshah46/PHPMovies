@props(['actors'])

<ul class="flex">
    @foreach($actors as $actor)
    <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
      <a href="/actors/{{$actor->id}}/">{{$actor->name}}</a>
    </li>
    @endforeach
</ul>