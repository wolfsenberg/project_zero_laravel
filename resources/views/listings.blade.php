<?php
    //@7VIEW BASICS & PASSING DATA*
    //@8BLADE TEMPLATES & BASIC DIRECTIVES*
?>

{{--  PHP DIRECTIVES

@php
    $test = 1;
@endphp
{{$test}}

--}}

<h1>{{$heading}}</h1>

{{-- NO LISTING IF 
@if(count($listings) ==0 )
    <p>No listings found</p>
@endif
--}}

@unless(count($listings)==0)


@foreach($listings as $listing)
<h2>
    <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
</h2>
<p>
    {{$listing['description']}}
</p>
@endforeach

@else
    <p>No listing found</p>
@endunless