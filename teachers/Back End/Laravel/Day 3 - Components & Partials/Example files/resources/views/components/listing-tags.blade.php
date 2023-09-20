@props(['tagsCsv'])
{{-- get the list of tags --}}

{{-- convert the list to an array --}}
@php 
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    {{-- display all the tags --}}
    @foreach ($tags as $tag) 
        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            <a href="">{{$tag}}</a>
        </li>
    @endforeach
</ul>