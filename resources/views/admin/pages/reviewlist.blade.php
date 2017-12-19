@extends('admin.layout.master')

@section('MainContent')
 <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="{{url('/dashboard')}}">Dashboard</a>
	        </li>
	        <li class="breadcrumb-item active"> <a href="{{url('/dashboard/testimonial')}}">Testimonial</a></li>
	        
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
                  <th>Review Title</th>
                  <th>Image</th>
                  <th colspan="2" width="10%">Action</th>
                </tr>
              </thead>
              <tbody>
              @if($reviews->count())

                  @foreach($reviews as $review)
                      <tr>
                          <td>{{ $review->title }}</td>
                          <td>

                              <img class="img-rounded" width="150px" src="{{ url('/storage/images/'.$review->image)}}" alt="">
                          </td>
                          <td> <a class="btn btn-primary" href="{{ route('testimonial.edit',$review->id) }}">Edit</a></td>
                          <td>

                              <form  action="{{route('testimonial.destroy', $review->id)}}" method="post">
                                  {{csrf_field()}}
                                  <input name="_method" type="hidden" value="DELETE">
                                  <button style="cursor: pointer;" class="btn btn-warning" type="submit">Delete</button>
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