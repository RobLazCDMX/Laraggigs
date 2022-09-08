{{-- this props are coming from the database --}}
@props(['tagsCsv'])

{{-- converting props into array so we can loop through it --}}
@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @foreach ($tags as $tag)
         <li
        class="bg-black text-white rounded-xl px-3 py-1 mr-2"
    >
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>