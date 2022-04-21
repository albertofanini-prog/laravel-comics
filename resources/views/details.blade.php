@extends('layouts.standard')

@section('metaTitle', $comic['title'])

@section('mainContent')
<main>
    <div class="container_detail">
        <img src="{{$comic['thumb']}}" alt="">
        <h1>{{$comic['title']}}</h1>
        <h5>{{$comic['description']}}</h5>
        <h4>{{$comic['sale_date']}}</h1>
        <h4>{{$comic['type']}}</h4>
        <h3>{{$comic['price']}}</h3>
    </div>
</main>
@endsection