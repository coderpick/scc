@extends('admin.layout.master')

@section('MainContent')
 <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="{{url('/dashboard')}}">Dashboard</a>
	        </li>
	        <li class="breadcrumb-item active"> <a href="{{url('/dashboard/mobile')}}">Mobile numbers</a></li>
      </ol>
         <a href="{{url('/dashboard/mobile/create')}}" class="btn btn-success btn-sm pull-right">Add new Number</a>
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
                  <th>Mobile Number</th>
                  <th>department</th>
                  <th width="15%">Action</th>
                </tr>
              </thead>
              <tbody>
                @if($mobilenumbers->count())


                    @foreach($mobilenumbers as $mobile)
                    <tr>
                        <td>{{ $mobile->mobile }}</td>
                        <td>{{$mobile->department}}</td>
                       <td>
                           <a class="btn btn-primary btn-sm" href="{{ route('mobile.edit',$mobile->id) }}">Edit</a>
                           <form id="form-delete"  action="{{route('mobile.destroy', $mobile->id)}}" method="post">
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