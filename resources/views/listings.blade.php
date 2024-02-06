@extends('layout')

@section('content')
@include('partial._hero')
@include('partial._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    {{--
        We can do the listing check using the if condition too.
        @if (count($listings) == 0)
            <p>No Listing Found</p>
        @endif 
    --}}

    @unless(count($listings) == 0)
        @foreach($listings as $listing)
            <x-listing-card :listing="$listing" />
        @endforeach

    @else
        <p>No Listing Found</p>

    @endunless
</div>
@endsection