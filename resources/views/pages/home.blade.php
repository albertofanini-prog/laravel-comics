<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL('./css/app.css')}}">
    <title>DC | Welcome to DC</title>
</head>
<body>
    @include('partials.header')
    <main>
        <div class="jumbotron"></div>
        <div class="comics_wrapper">
            <div class="comics">
                <ul>
                {{-- {@dump($comics); --}}
                @foreach($comics as $value)
                    <li>
                        <img src="{{$value['thumb']}}" alt="">
                        <h3>{{$value['title']}}</h3>
                    </li>
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
    </main>
</body>
</html>