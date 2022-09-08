{{-- By using the variable $slot we can pass in anything we want to be wrapped by the styles of this div e.g. a listing card --}}

{{-- Without passing attribute: this doesn't allow us to modify the class' --}}
{{-- <div class="bg-gray-50 border border-gray-200 rounded p-6">
    {{$slot}}
</div> --}}


{{-- Passing $attributes: by doing this we can add to class and whatever is added is merged to the initial class --}}
<div {{$attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6'])}}>
    {{$slot}}
</div> 