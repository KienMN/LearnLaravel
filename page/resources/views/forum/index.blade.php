@extends('layouts.master')

@section('content')

<div class="navbar" style="background: #082346;"></div>

<div class="container">
	<h1>Forum</h1>
	<br/>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="postlist">
				<div class="panel">
					
					<div class="panel-heading">
						<div class="row">
							<div class="col-sm-9">
								<h2>{{ $thread->title }}</h2>
							</div>
							<div class="col-sm-3">
								<h4 class="pull-right">
									<p>Created {{ $thread->created_at->diffForHumans() }} by <a href="#">{{ $thread->user->name }}</a></p>
								</h4>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<p>{{ $thread->body }}</p>
					</div>
					<div class="panel-footer">
						Tags: <span class="label label-default">Welcome</span> <span class="label label-default">Updates</span> <span class="label label-default">July</span>
					</div>
				
				</div>
			</div>
			<!-- <div class="text-center"><a href="#" id="loadmore" class="btn btn-primary">Older Posts...</a></div> -->
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel">
				<div class="panel-heading">
					<h3>Comment</h3>
				</div>
			</div>
		</div><!-- /col-sm-12 -->
	</div><!-- /row -->
	
	<!-- Each comments -->
	@foreach ($comments as $comment)
	<div class="row">
		<div class="panel-body">
			<div class="col-sm-1"></div>
			<div class="col-sm-1">
				<div class="thumbnail">
					<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
				</div><!-- /thumbnail -->
			</div><!-- /col-sm-1 -->

			<div class="col-sm-9">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>{{ $comment->user->name }}</strong> at <span class="text-muted">{{ $comment->created_at->diffForHumans() }}</span>
					</div>
					<div class="panel-body">
						{{ $comment->content }}
					</div><!-- /panel-body -->
				</div><!-- /panel panel-default -->
			</div><!-- /col-sm-5 -->
		</div><!-- /panel-body -->
	</div><!-- /row -->
	@endforeach
</div><!-- /container -->

<div class="container">
	<div class="row">
		<div class="panel-body">
			<div class="panel-heading">
				<h3>Your Opinion</h3>
			</div>

			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="widget-area no-padding blank">
						<div class="status-upload">
							@if (Auth()->check())
							<form method="POST" action="/forum/threads/{{ $thread->id }}/comment">
								{{ csrf_field() }}
								<div class="panel-body">
									<textarea class="form-control input-lg" rows="9" name="content"></textarea>
								</div>
								<input type="submit" class="btn btn-success pull-right" value="Publish">
							@else
								You need to sign in to publish your opinions	
							@endif
							</form>
						</div><!-- Status Upload  -->
					</div><!-- Widget Area -->
				</div>
			</div>
		</div>
	</div>
</div>

@endsection