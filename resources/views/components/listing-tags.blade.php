@props(['tags'])

@php 
    $arr_of_tags = explode(",", $tags);
@endphp

<ul class="flex">
    @foreach($arr_of_tags as $tag)
        <li class="bg-black text-white rounded-xl px-3 py-1 mr-2" >
            <a href="#">{{$tag}}</a>
        </li>
    @endforeach
</ul>