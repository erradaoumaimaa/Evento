@props(['links'])

<div class="w-[15%] h-fit flex flex-col p-4 border-4 border-dashed border-vert gap-4 text-vert font-black text-2xl rounded-lg">
    @foreach(unserialize($links) as $name => $route)
        <a href="{{ route($route) }}" class="py-2 px-4 transition-all hover:bg-vert hover:text-white rounded-lg shadow-xl">{{ ucwords($name) }}</a>
    @endforeach

</div>
