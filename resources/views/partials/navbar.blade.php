@extends('partials.header')

@section('links')
<ul>
    @foreach ($links_list as $link)
    <li>
        <p>
            {{$link['title']}}
        </p>
    </li>
    @endforeach
</ul>
@endsection