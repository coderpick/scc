@extends('admin.layout.master')

@section('MainContent')

    <script>
        @if(Session::has('success'))
        $.Notify({
            headerText:'{{ Session::get("success") }}',
            type:'Success',
            position:'bottom-right'
        });
        @endif
    </script>
      <div class="card card-register mx-auto mt-5">
      <div class="card-header">Profile</div>
      <div class="card-body">  
			<div class="profile text-center">
				<img src="{{asset('public/admin/img/saiful.jpg')}}" class="img-circle" alt="User Image">

				<h3>{{ Auth::user()->name }}</h3>

				<a href="{{route('profile.edit',Auth::user()->id)}}" class="btn btn-info">Update Profile</a>
			</div>
      </div>
    </div>
    <br>
@endsection