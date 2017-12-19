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
          	<form action="{{route('services.store')}}" method="post" enctype="multipart/form-data">
          		{{ csrf_field()}}
      		    <div class="form-group">
			        <label for="inputservice">Service Name:</label>
			        <input type="text" name="title" class="form-control" id="inputservice" placeholder="Enter Service name">
			        
			    </div>
			     <div class="form-group">

			        <label for="inputBody">Service Description:</label>
			         <textarea class="form-control" rows="6" name="description"></textarea>
			         
			    </div>
			    <div class="form-group">
			        <label for="uploadimg">Image:</label>
			        <input type="file" name="image" class="form-control" id="uploadimg">
			    </div>
			  
			    <button type="submit" class="btn btn-primary">Add</button>
          	</form>           
      </div>
    </div>
    <br>
@endsection