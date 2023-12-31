
@extends('layouts.Main')

@section('container')
<h1>{{ $title }}</h1>
@foreach ($category as $item)
    <ul>
        <li>
            <h2><a href="/categories/{{ $item->slug }}">{{ $item->unit }}</a></h2>
        </li>
    </ul>

    @endforeach
    <a href="/about">back</a>
@endsection
