@extends('layouts.master')

@section('content')

	<div class="navbar" style="background: #082346;"></div>

	<div class="container">
		<h1>Forum</h1>
		<br/>
	</div>

	<div class="container text-center">
		<h2>Create a new thread</h2>
		<br/>
	</div>

	<div class="container">
		<form method="POST" action="/forum/threads/create">
			{{ csrf_field() }}

			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-primary" size="40px">
						<input type="text" name="title" id="title" placeholder="Your Thread Title" class="form-control input-lg">
					</div>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="btn-group">
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="New file">
									<i class="fa fa-file-o"></i>
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Save">
									<i class="fa fa-save"></i>
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Print">
									<i class="fa fa-print"></i>
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Source code">
									<i class="fa fa-code"></i> Source
								</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Bold">
									<i class="fa fa-bold"></i>
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Italic">
									<i class="fa fa-italic"></i>
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Underline">
									<i class="fa fa-underline"></i>
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Strikethrough">
									<i class="fa fa-strikethrough"></i>
								</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Cut">
									<i class="fa fa-scissors"></i>
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Copy">
									<i class="fa fa-copy"></i>
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Past">
									<i class="fa fa-paste"></i>
								</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Undo">
									<i class="fa fa-reply"></i>
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Redo">
									<i class="fa fa-share"></i>
								</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Align left">
									<i class="fa fa-align-left"></i>
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Align center">
									<i class="fa fa-align-center"></i>
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Align right">
									<i class="fa fa-align-right"></i>
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Align justify">
									<i class="fa fa-align-justify"></i>
								</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Numbered list">
									<i class="fa fa-list-ol"></i>
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Bulleted list">
									<i class="fa fa-list-ul"></i>
								</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Link">
									<i class="fa fa-link"></i>
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Unlink">
									<i class="fa fa-unlink"></i>
								</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default"  data-toggle="tooltip" title="Picture">
									<i class="fa fa-picture-o"></i>
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="HTML table">
									<i class="fa fa-table"></i>
								</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Font">
									<i class="fa fa-font"></i>
								</button>
							</div>
						</div>

						<div class="panel-body">
							<textarea class="form-control input-lg" rows="9" name="body"></textarea>
						</div>
						<div class="panel-footer">
							<input type="submit" class="btn btn-success" value="Publish">
						<!-- <button type="button" class="btn btn-primary">
								Save Draft
							</button> -->
							<div class="pull-right">
								<button type="button" class="btn btn-danger">
									<a href="/forum" style="text-decoration: none; color: white;"><i class="fa fa-trash-o"></i> Delete</a>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>

		@include('layouts.error')

	</div>
	<br/>


@endsection