@extends('layouts.Main')

@section('container')
<h3>{{ $posts->username }}</h3>
<p>{{ $posts->role }}</p>

<h5>Kebun / Pabrik : <a href="/categories/{{ $posts->category->slug }}">{{ $posts->category->unit }}</a></h5>
<a href="/about">back</a>
@endsection
