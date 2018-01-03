@extends('admin.layout.master')

@section('MainContent')
 <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="{{url('/dashboard')}}">Dashboard</a>
	        </li>
	        <li class="breadcrumb-item active"> Email</li>
	        
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

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr >
                  <th>S/N</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th  width="15%">Action</th>
                </tr>
              </thead>
              <tbody>

              @if($emails->count())
                    <?php $i =1; ?>
                  @foreach($emails as $email)
                      <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{$email->email}}</td>
                          <td>
                              <?php if($email->status==0){?>
                              <a href="" class="btn btn-warning btn-sm">Pending</a>
                              <?php }else{?>
                              <a href="" class="btn btn-success btn-sm">Success</a>
                              <?php }?>
                          </td>
                          <td>
                              <form id="form-delete"  action="{{route('email.delete',$email->id)}}" method="post">
                                  {{csrf_field()}}
                                  <input name="_method" type="hidden" value="DELETE">
                                  <button style="cursor: pointer;" class="btn btn-danger btn-sm" type="submit">Delete</button>
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