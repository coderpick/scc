@extends('admin.layout.master')

@section('MainContent')
 	   <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="{{'/dashboard'}}">Dashboard</a>
	        </li>
	        <li class="breadcrumb-item "> <a href="{{url('/dashboard/slider')}}">Slider</a></li>
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


      <div class="card-header">Add New Slider Content</div>
      <div class="card-body">  
          	<form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
          		{{ csrf_field()}}

						<div class="form-group">
							<label for="inputTitle">Title</label>
							<input type="text" name="title" class="form-control" id="inputTitle" required>
						</div>
						<div class="form-group">
							<label for="inputDesc">Description:</label>
						   <textarea class="form-control" name="description" id="inputDesc" required></textarea>
						</div>
						<div class="form-group">
							<label for="uploadSlider">Upload Slider Photos</label>
							<input type="file" name="image" class="form-control" id="uploadSlider" required>
						</div>

			    <button type="submit" class="btn btn-primary">Add new Slider Content</button>
          	</form>           
      </div>
    </div>
    <br>
@endsection