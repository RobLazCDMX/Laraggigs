
@extends('layout')
{{-- Syntax used if it was a php file and not a blade.php file --}}
{{-- <h1><?php echo $heading; ?></h1>
<?php foreach($listings as $listing): ?>
<h2><?php echo $listing['title'];?></h2>
<p><?php echo $listing['description'];?></p>
<?php endforeach; ?>  --}}


{{-- name passed in the section directive has to match the one being passed in the yiel directive in layout wich is being extended --}}
    
@section('content')
{{-- this brings in the partial hero --}}
@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
{{-- personal choice whether you want to use the unless directive or an if statement --}}
@unless (count($listings) == 0)
{{-- Start with @ are directives --}}
@foreach($listings as $listing)
{{-- In order to access the component listing-car and pass in the variable we bind it by using ':'. the ":" prefix binds the prop to the variable --}}
<x-listing-card  :listing='$listing'/>
@endforeach

@else 
<p>No listings found</p>
@endunless

</div>

@endsection


