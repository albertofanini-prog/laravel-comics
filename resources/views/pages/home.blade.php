@extends('layouts.standard')
 
@section('mainContent')
<main>
    <div class="jumbotron"></div>
    <div class="comics_wrapper">
        <div class="comics">
            <ul>
            {{-- {@dump($comics); --}}
            @foreach($comics as $index => $value)
                <a href="comics/{{$index}}">
                    <li>
                        <img src="{{$value['thumb']}}" alt="">
                        <h3>{{$value['title']}}</h3>
                    </li>
                </a>
            @endforeach
            </ul>
        </div>
        <button>
            load more
        </button>
    </div>
    <button class="current">
        current series
    </button>
    @include('partials.store') 
</main>
@endsection