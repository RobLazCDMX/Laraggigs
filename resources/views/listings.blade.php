
{{-- Syntax used if it was a php file and not a blade.php file --}}
{{-- <h1><?php echo $heading; ?></h1>
<?php foreach($listings as $listing): ?>
<h2><?php echo $listing['title'];?></h2>
<p><?php echo $listing['description'];?></p>
<?php endforeach; ?>  --}}

<h1>{{$heading}}</h1>
{{-- Start with @ are directives --}}
@foreach($listings as $listing)
<h2>
    {{$listing['title']}}
</h2>
<p>
    {{$listing['description']}}
</p>
@endforeach 
