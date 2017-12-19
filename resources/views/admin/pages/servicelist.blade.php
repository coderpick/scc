@extends('admin.layout.master')

@section('MainContent')
 <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="{{url('/dashboard')}}">Dashboard</a>
	        </li>
	        <li class="breadcrumb-item active"> <a href="{{url('/dashboard/services')}}">Service</a></li>
	        
      </ol>
         <script>
             @if(Session::has('success'))
             $.Notify({
                 headerText:'{{ Session::get("success") }}',
                 type:'Success',
                 position:'bottom-right'
             });
             @endif
         </script>
   <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>

              <tbody>
                @if($services->count())
                @foreach($services as $service)
                <tr>
                  <td>{{ $service->title}}</td>
                  <td>{{ $service->description}}</td>
                  <td><img class="img-rounded" width="120px" src="{{ url('/storage/images/'.$service->image)}}" alt=""></td>
                  <td>
                      <a class="btn btn-primary btn-sm" href="{{ route('services.edit',$service->id) }}">Edit</a>
                  </td>
                   <td>
                      <form  action="{{route('services.destroy', $service->id)}}" method="post">
                          {{csrf_field()}}
                          <input name="_method" type="hidden" value="DELETE">
                          <button style="cursor: pointer;" class="btn btn-warning btn-sm" type="submit">Delete</button>
                      </form>
                  </td>
                </tr>
                @endforeach
                @else
                <tr>
                  <td colspan="4">No recoard found!</td>
                </tr>
                @endif
              </tbody>
            </table>
          </div>
          <br>	
@endsection