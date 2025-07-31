<x-layout>

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
    @include('partials._hero')
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        {{-- NO LISTING IF 
@if (count($listings) == 0)
    <p>No listings found</p>
@endif
--}}



        @unless (count($listings) == 0)
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing"/>
            @endforeach
        @else
            <p>No listing found</p>
        @endunless

    </div>

</x-layout>
