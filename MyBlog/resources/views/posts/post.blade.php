@extends ('layouts.master')

@section('content')
  <div class="container">

    <div class="row">

      <div class="col-sm-8 blog-main">

        <div class="blog-post">
          
          <h2 class="blog-post-title">{{ $post->title }}</h2>
          <p class="blog-post-meta">{{ $post->created_at }} by <a href="#">KienMN</a></p>

          <p>
            {{ $post->body }}
          </p>
          
        </div><!-- /.blog-post -->

        <nav class="blog-pagination">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

      </div><!-- /.blog-main -->

@endsection