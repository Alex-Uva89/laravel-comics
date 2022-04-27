@extends('guest.template.base')

@section('title', 'DC - Home')

@section('content')
<h1>home</h1>
<div>
    @foreach ($comics as $comic)
        <img src="{{ $comic['thumb'] }}" alt="">
    @endforeach
</div>
@endsection