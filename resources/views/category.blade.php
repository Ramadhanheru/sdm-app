
@extends('layouts.Main')

@section('container')
<h1>Kebun / Pabrik : {{ $category }}</h1>
@foreach ($posts as $item)
<a href="/detail/{{ $item->slug}}">
<h2>{{ $item->username }}</h2>
</a>
    <p>{{ $item->role }}</p>
    @endforeach
    <a href="/about">back</a>
@endsection
