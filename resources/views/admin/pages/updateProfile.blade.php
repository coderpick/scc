@extends('admin.layout.master')

@section('MainContent')
    <div style="margin-top: 20px; width: 75%; margin:0 auto">
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif
    </div>
      <div class="card card-register mx-auto mt-5">
      <div class="card-header">Profile Update</div>
      <div class="card-body">  
			<div class="profile">
                <form action="{{route('profile.update',Auth::user()->id)}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Email</label>
                        <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

			</div>
      </div>
    </div>
    <br>
@endsection