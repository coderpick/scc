@extends('admin.layout.master')

@section('MainContent')
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{{url('/dashboard')}}">Dashboard</a>
		</li>
		<li class="breadcrumb-item "> <a href="{{'/dashboard/social'}}">Social</a></li>
		<li class="breadcrumb-item active">update</li>
	</ol>
	<div style="margin-top: 20px; width: 75%; margin:0 auto">
		@if(count($errors)>0)
			@foreach($errors->all() as $error)
				<p class="alert alert-danger">{{ $error }}</p>
			@endforeach
		@endif


	</div>
	<div class="card card-register mx-auto mt-5">


		<div class="card-header">Edit Social Link</div>
		<div class="card-body">

			<form action="{{ route('social.update',$links->id) }}" method="post">
				{{ csrf_field()}}
				<div class="form-group">
					<label for="inputservice">Title:</label>
					<input type="text" name="title" class="form-control" id="inputservice" value="{{ $links->title }}">
					<input type="hidden" name="_method" value="PUT">
				</div>
				<div class="form-group">
					<label for="inputURL">URL:</label>
					<input type="url" name="url" class="form-control" id="inputURL" value="{{$links->url}}">
				</div>

				<button type="submit"  class="btn btn-primary">Update</button>
			</form>
		</div>
	</div>
	<br>
@endsection