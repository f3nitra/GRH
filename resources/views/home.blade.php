@extends('layout')

@section('content')
<h1>WELCOME</h1>
<hr>
<div class="jumbotron">
    @foreach($articles as $article)
    <h1 class="display-3">{{ $article->title }}</h1>
    <p class="lead">{{ $article->content }}</p>
    <hr class="my-4">
    <em>Written by {{ $article->author }}</em>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
    @endforeach

  </div>

@endsection