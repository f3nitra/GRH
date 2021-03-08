@extends('layout')

@section('content')
<h1>WELCOME</h1>
<hr>
<div class="card-columns">
@foreach($articles as $article)
    <div class="card border-primary mb-3" style="max-width: 20rem;">
        <img src="http://placehold.it/350x150" class="card-img-top" alt="...">
        <div class="card-header"><h2>{{ $article->title }}</h2></div>
        <div class="card-body">
        <h4 class="card-title">By {{ $article->author }}</h4>
        <p class="card-text"> {{ $article->content }}</p><p>...</p>
        <p class="card-footer"><small class="text-muted">Created at {{ $article->created_at }}</small></p>
        </div>
    </div>
    @endforeach
</div>    
@endsection