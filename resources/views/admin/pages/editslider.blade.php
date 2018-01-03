@extends('admin.layout.master')

@section('MainContent')
 	   <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="{{'/dashboard'}}">Dashboard</a>
	        </li>
	        <li class="breadcrumb-item "> <a href="{{'/dashboard/services'}}">Service</a></li>
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
      

      <div class="card-header">Add New Services</div>
      <div class="card-body">

          	<form action="{{route('slider.update',$slider->id)}}" method="post" enctype="multipart/form-data">
          		{{ csrf_field()}}
				<div class="form-group">
					<label for="inputTitle">Title</label>
					<input type="text" name="title" class="form-control" value="{{$slider->title}}" id="inputTitle">
				</div>
				<div class="form-group">
					<label for="uploadimg">Description:</label>
					<textarea class="form-control" name="description">{{$slider->description}}</textarea>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="uploadimg">Image:</label>
							<input type="file" name="image" value="{{$slider->image}}"  class="form-control" id="uploadimg">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="service-img">
							<img class="img-rounded" width="150px" src="{{ url('/storage/slider/'.$slider->image)}}" alt="">
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Update Slider</button>
          	</form>           
      </div>
    </div>
    <br>
@endsection