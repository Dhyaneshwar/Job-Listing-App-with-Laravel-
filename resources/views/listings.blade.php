<h1>{{$heading}}</h1>
<div>
    {{--
        We can do the listing check using the if condition too.
        @if (count($listings) == 0)
            <p>No Listing Found</p>
        @endif 
    --}}

    @unless(count($listings) == 0)
        @foreach($listings as $listing)
            <h2>
                <a href='/listings/{{$listing['id']}}'>{{$listing['title']}}</a>
            </h2>
            <p>{{$listing['description']}}</p>
        @endforeach

    @else
        <p>No Listing Found</p>

    @endunless
</div>