@extends('admin.layout.master')

@section('MainContent')
 	   <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="{{url('/dashboard')}}">Dashboard</a>
	        </li>
	        <li class="breadcrumb-item "> <a href="{{url('/dashboard/mobile')}}">Number</a></li>
	        <li class="breadcrumb-item active">Add</li>
      </ol>
        <div style="margin-top: 20px; width: 75%; margin:0 auto">
          @if(count($errors)>0)
          @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{ $error }}</p>
          @endforeach
          @endif

          
      </div>
      <div class="card card-register mx-auto mt-5">

      <div class="card-header">Add Mobile Number</div>
      <div class="card-body">  
          	<form action="{{route('mobile.store')}}" method="post">
          		{{ csrf_field()}}

						<div class="form-group">
							<label for="inputTitle">Mobile Number</label>
							<input type="text" name="mobile" class="form-control" id="inputTitle"  placeholder="01xxxxxxxxx">
						</div>
						<div class="form-group">
							<label for="inputDep">Department</label>
							<input type="text" name="department" class="form-control" id="inputDep"  placeholder="hotline,car-rent etc">
						</div>

			    <button type="submit" class="btn btn-primary">Add</button>
          	</form>           
      </div>
    </div>
    <br>
@endsection