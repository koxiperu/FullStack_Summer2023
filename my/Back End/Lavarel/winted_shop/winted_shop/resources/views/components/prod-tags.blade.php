@props(['tagsCsv'])

@php
    $tags=explode(' ',$tagsCsv);
@endphp
<ul class='non-list inline'> 
    @foreach ($tags as $tag)
        <li>
            <a class='non-link tag-s' href="?tag={{$tag}}">{{$tag}}</a>
        </li>
    @endforeach
</ul>