@extends('layouts.master')

@section('content')

<div class="navbar" style="background: #082346;"></div>

<div class="container">
	<div class="row">
	<div class="row-eq-height > col-xs-9"> 
		<h1><a href="/forum" style="text-decoration: none;">Forum</a></h1>
	</div>
	<div class="row-eq-height > col-xs-3">
		@if (Auth()->check())
		<a href="/forum/threads/create"><button class="btn btn-primary btn-outline-info pull-right">Create a new thread</button></a>
		@else
		<a href="/sign-in"><button class="btn btn-primary btn-outline-info pull-right">Create a new thread</button></a>
		@endif
	</div>
	</div>
</div>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="postlist">
				<div class="panel">
					
					@foreach ($threads as $thread)
					
					<div class="panel-heading">
						<div class="row">
							<div class="col-sm-9">
								<h2><a href="/forum/threads/{{ $thread->id }}">{{ $thread->title }}</a></h2>
							</div>
							<div class="col-sm-3">
								<h4 class="pull-right">
									<p>Created {{ $thread->created_at->diffForHumans() }} by <a href="#">{{ $thread->user->name }}</a></p>
								</h4>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<h5>{{ $thread->body }}</h5>
					</div>
					<div class="panel-footer">
						Tags: <span class="label label-default">Welcome</span> <span class="label label-default">Updates</span> <span class="label label-default">July</span>
					</div>
					
					@endforeach
				
				</div>
			</div>
			<!-- <div class="text-center"><a href="#" id="loadmore" class="btn btn-primary">Older Posts...</a></div> -->
		</div>
	</div>
</div>

@endsection