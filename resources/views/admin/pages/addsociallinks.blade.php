@extends('admin.layout.master')

@section('MainContent')
 	   <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="{{url('/dashboard')}}">Dashboard</a>
	        </li>
	        <li class="breadcrumb-item "> <a href="{{url('/dashboard/social')}}">Social</a></li>
	        <li class="breadcrumb-item active">Create</li>
      </ol>
        <div style="margin-top: 20px; width: 75%; margin:0 auto">
          @if(count($errors)>0)
          @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{ $error }}</p>
          @endforeach
          @endif

          
      </div>
      <div class="card card-register mx-auto mt-5">

      <div class="card-header">Add Social links</div>
      <div class="card-body">  
          	<form action="{{route('social.store')}}" method="post">
          		{{ csrf_field()}}

						<div class="form-group">
							<label for="inputTitle">Website Title</label>
							<input type="text" name="title" class="form-control" id="inputTitle" required placeholder="like-facebook,twitter">
						</div>
						<div class="form-group">
							<label for="inputTitle">Add url</label>
							<input type="url" name="url" class="form-control" id="inputTitle" required placeholder="www.facebook.com">
						</div>

			    <button type="submit" class="btn btn-primary">Add</button>
          	</form>           
      </div>
    </div>
    <br>
@endsection