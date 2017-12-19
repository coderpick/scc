@extends('admin.layout.master')

@section('MainContent')
 	   <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="{{'/dashboard'}}">Dashboard</a>
	        </li>
	        <li class="breadcrumb-item "> <a href="{{'/dashboard/gallary'}}">Review</a></li>
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

      <div class="card-header">Show Contact Details</div>
      <div class="card-body">
		  <div class="row">
			  <div class="col-md-6 offset-md-3">
				  <table class="table table-bordered">
					  <tr>
						  <th>Name:</th>
						  <td>{{ $contact->name }}</td>
					  </tr>
					  <tr>
						  <th>Email:</th>
						  <td>{{ $contact->mobile }}</td>
					  </tr>
					  <tr>
						  <th>Message:</th>
						  <td>{{ $contact->message }}</td>
					  </tr>
				  </table>
			  </div>
		  </div>

      </div>
    </div>
    <br>
@endsection