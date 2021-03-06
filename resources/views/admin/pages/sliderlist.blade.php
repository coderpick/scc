@extends('admin.layout.master')

@section('MainContent')
 <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="{{url('/dashboard')}}">Dashboard</a>
	        </li>
	        <li class="breadcrumb-item active"> <a href="{{url('/dashboard/slider')}}">Slider</a></li>
	        
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
                  <th>Description</th>
                  <th>Image</th>
                  <th width="15%">Action</th>
                </tr>
              </thead>
              <tbody>
                @if($sliders->count())
                    @foreach($sliders as $slider)
                        <tr>
                            <td>{{$slider->title}}</td>
                            <td>{{$slider->description}}</td>
                            <td><img width="120px" class="img-thumbnail" src="{{url('storage/slider/'.$slider->image)}}" alt=""></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('slider.edit',$slider->id) }}">Edit</a>
                                <form id="form-delete"  action="{{route('slider.destroy', $slider->id)}}" method="post">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button style="cursor: pointer;" class="btn btn-warning btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif

              </tbody>
            </table>
          </div>
          <br>	
@endsection