@extends('guest.template.base')

@section('title', 'DC - Home')

@section('content')
<div class="container-background">
<div class="jumbotron"></div>
    <div class="container-card">
        @foreach ($comics as $comic)
            <div class="card">
                <img src="{{ $comic['thumb'] }}" alt="{{$comic['title']}} img">
                <h3>{{ $comic['title'] }}</h3>
            </div>
        @endforeach
    </div>
</div>
@endsection