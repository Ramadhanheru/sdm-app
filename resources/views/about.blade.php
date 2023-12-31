
@extends('layouts.Main')

@section('container')
<h1>{{ $title }}</h1>
@foreach ($posts as $item)
<a href="/detail/{{ $item->slug}}">
    <h2>{{ $item->username }}</h2>
</a>
<p>{{ $item->role }}</p>
<a href=""class="text-decoration-none">Create BY :{{ $item->user->name }}</a>
    
@endforeach
@endsection
