@extends('layout')

@section('content')
<h1>WELCOME</h1>
<hr>
@foreach($articles as $article)
    <div class="card border-primary mb-3" style="max-width: 20rem;">
        <div class="card-header"><h2>{{ $article->title }}</h2></div>
        <div class="card-body">
        <h4 class="card-title">By {{ $article->author }}</h4>
        <p class="card-text">{{ $article->content }}</p>
        </div>
    </div>
@endforeach

@endsection