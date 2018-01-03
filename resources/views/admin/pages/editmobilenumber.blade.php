@extends('admin.layout.master')

@section('MainContent')
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{{url('/dashboard')}}">Dashboard</a>
		</li>
		<li class="breadcrumb-item "> <a href="{{'/dashboard/mobile'}}">Mobile</a></li>
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

			<form action="{{ route('mobile.update',$numbers->id) }}" method="post">
				{{ csrf_field()}}
				<div class="form-group">
					<label for="inputservice">Number:</label>
					<input type="text" name="mobile" class="form-control" id="inputservice" value="{{ $numbers->mobile }}">
					<input type="hidden" name="_method" value="PUT">
				</div>
				<div class="form-group">
					<label for="department">Department:</label>
					<input type="text" name="department" class="form-control" id="department" value="{{$numbers->department}}">
				</div>

				<button type="submit"  class="btn btn-primary">Update</button>
			</form>
		</div>
	</div>
	<br>
@endsection