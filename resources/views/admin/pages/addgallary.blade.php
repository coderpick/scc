@extends('admin.layout.master')

@section('MainContent')
 	   <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="{{'/dashboard'}}">Dashboard</a>
	        </li>
	        <li class="breadcrumb-item "> <a href="{{'/dashboard/gallary'}}">Gallary</a></li>
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
		  <script>
              function previewImage(event)
              {
                  var reader = new FileReader();
                  reader.onload = function()
                  {
                      var output = document.getElementById('image-preview');
                      output.src = reader.result;
                  }
                  reader.readAsDataURL(event.target.files[0]);
              }

		  </script>

      <div class="card-header">Add New Gallary Photos</div>
      <div class="card-body">  
          	<form action="{{route('gallary.store')}}" method="post" enctype="multipart/form-data">
          		{{ csrf_field()}}
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="inputTitle">Title</label>
							<input type="text" name="title" class="form-control" id="inputTitle">
						</div>
						<div class="form-group">
							<label for="uploadimg">Image:</label>
							<input type="file" name="image" accept="image/*" onchange="previewImage(event)" class="form-control" id="uploadimg">
						</div>
					</div>
					<div class="col-sm-6">
						<img id="image-preview" class="img-thumbnail" style="width: 200px;">
				    </div>

			  
			    <button type="submit" class="btn btn-primary">Add new Image</button>
          	</form>           
      </div>
    </div>
    <br>
@endsection