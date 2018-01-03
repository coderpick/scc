@extends('admin.layout.master')

@section('MainContent')
 <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="{{url('/dashboard')}}">Dashboard</a>
	        </li>
	        <li class="breadcrumb-item active"> <a href="{{url('/dashboard/social')}}">Social link</a></li>
      </ol>
         <a href="{{url('/dashboard/social/create')}}" class="btn btn-success btn-sm pull-right">Add new Links</a>
         <div class="clearfix"></div>
 <br>
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
                @if($sociallinks->count())


                    @foreach($sociallinks as $links)
                    <tr>
                        <td>{{ $links->title }}</td>
                        <td>{{$links->url}}</td>
                       <td>
                           <a class="btn btn-primary btn-sm" href="{{ route('social.edit',$links->id) }}">Edit</a>
                           <form id="form-delete"  action="{{route('social.destroy', $links->id)}}" method="post">
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