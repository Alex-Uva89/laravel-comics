@extends('guest.template.base')

@section('title', 'DC - Home')

@section('content')
<div class="jumbotron"></div>

<div>
    @foreach ($comics as $comic)
        <img src="{{ $comic['thumb'] }}" alt="">
    @endforeach
</div>
@endsection