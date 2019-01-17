@extends('layouts.base') 

@section('content')
      <div class="heading">
        <h4>You might like</h4>
      </div>
      <div class="article large-article">
        <img src="https://cdn-images-1.medium.com/max/2000/1*l6CWp9jgLHEYTcofJRcHSg.png" class="article--image">
        <h4 class="article--title"><a href="{{ url("/posts/1") }}">Skeuomorphism, Flat Design and The Rise of Type Design</a></h4>
        <p class="article--preview">Sci-fi books, movies, and shows often accurately predict the future. From debit cards to video chat to landing on the moon — even the UI…</p>
      </div>
      @foreach($posts as $post)
      <div class="article">
        <img src="{{$post->image}}" class="article--image">
        <h4 class="article--title"><a href="{{ url("/posts/{$post->id}") }}">{{$post->title}}</a></h4>
        <p class="article--preview"><?php echo str_limit($post->body, $limit = 60, $end = '...')  ?></p>
      </div>
      @endforeach
@endsection