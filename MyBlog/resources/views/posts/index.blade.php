@extends ('layouts.master')

@section('content')
  <div class="container">

    <div class="row">

      <div class="col-sm-8 blog-main">

        <div class="blog-post">
          @foreach ($posts as $post)
          <h2 class="blog-post-title"><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h2>
          <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by <a href="#">{{ $post->user->name }}</a></p>

          <p>
            {{ $post->body }}
          </p>
          @endforeach
        </div><!-- /.blog-post -->

        <nav class="blog-pagination">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

      </div><!-- /.blog-main -->

@endsection