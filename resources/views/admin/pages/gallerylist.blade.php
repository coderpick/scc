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
                <tr style="text-align: center;">
                  <th>Title</th>
                  <th>Image</th>
                  <th width="15%">Action</th>
                </tr>
              </thead>
              <tbody>
                @if($gallerys->count())


                    @foreach($gallerys as $gallery)
                    <tr>
                        <td>{{ $gallery->title }}</td>
                        <td><img width="120px" class="img-thumbnail" src="{{url('storage/gallery/'.$gallery->image)}}" alt=""></td>
                       <td>
                           <a class="btn btn-primary btn-sm" href="{{ route('gallery.edit',$gallery->id) }}">Edit</a>
                           <form id="form-delete"  action="{{route('gallery.destroy', $gallery->id)}}" method="post">
                               {{csrf_field()}}
                               <input name="_method" type="hidden" value="DELETE">
                               <button style="cursor: pointer;" class="btn btn-warning btn-sm" type="submit">Delete</button>
                           </form>
                       </td>
                    </tr>
                    @endforeach
                @else
              <tr>
                  <td colspan="4">No record found!</td>
              </tr>
                @endif
              </tbody>
            </table>
          </div>
          <br>	
@endsection