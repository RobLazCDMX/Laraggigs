<!-- Passing in the variable as a prop so it can be used in the body -->
@props(['listing'])

{{-- @php
    $tags( = [explode( ',', csv)])
@endphp --}}

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src={{asset("images/no-image.png")}}
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                {{-- When using eloquent and therefor dealing with eloquent models it gives us a collention which allow us to use this syntax rather than {{$listing['title']}} --}}
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
           
            <x-listing-tags :tagsCsv="$listing->tags"/>


            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>
                {{$listing->location}}
            </div>
        </div>
    </div>
</x-card>

