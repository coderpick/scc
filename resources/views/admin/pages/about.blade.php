@extends('admin.layout.master')

@section('MainContent')
 	   <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="{{'/dashboard'}}">Dashboard</a>
	        </li>
	        <li class="breadcrumb-item active">About</li>
      </ol>
        <div style="margin-top: 20px; width: 75%; margin:0 auto">
          @if(count($errors)>0)
          @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{ $error }}</p>
          @endforeach
          @endif
      </div>
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
      <div class="card-header">About Content</div>
      <div class="card-body">
          @if($about->count())
              @foreach($about as $content)
          	<form action="{{route('about.update',$content->id)}}" method="post" >
          		{{ csrf_field()}}
                <div class="form-group">
                    <textarea class="form-control" rows="10" name="about" id="AboutContent">{{$content->about}}</textarea>
                </div>
			    <button type="submit" class="btn btn-primary">Update About Content</button>
          	</form>
              @endforeach
          @endif
      </div>
    </div>
    <br>
@endsection