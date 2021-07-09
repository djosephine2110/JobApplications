@extends('layouts.adm')
@section('content')
    <div class="container">
        <table class="table table-bordered mt-5">
            <thead>
               <tr>
                <th>Profile Image</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>CV Link</th>

                  <th>Status</th>
                  <th scope="col">Action</th>

               </tr> 
            </thead>
            <tbody>
               @foreach($users as       $user)
                  <tr>
                    @if($user->is_admin !== 1)
                    <th><a href="images/download/{{$user->id}}"><img class="image img-thumbnail" src="{{asset('/storage/images/'.$user->image)}}" alt="profile_image" style="max-width:100px;"></a></th>
                    <th scope="row">{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <th><a href="books/download/{{$user->id}}">{{ $user->file }}</a></th> 
                    <td>

                        <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Reviewed" data-off="Unreviewed" {{ $user->status ? 'checked' : '' }}>
                     </td>
                    <td><a href="/test_detail/{{$user->id}}"><i class="fas fa-eye" style="margin-right:8px;"></i></a> 
                      <a href="/testdetaill/{{$user->id}}"><i class="fas fa-download"></i></a> 
                    </td>
                    @endif
                     
                  </tr>
               @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(function() {
          $('.toggle-class').change(function() {
              var status = $(this).prop('checked') == true ? 1 : 0; 
              var user_id = $(this).data('id'); 
               
              $.ajax({
                  type: "GET",
                  dataType: "json",
                  url: '/changeStatus',
                  data: {'status': status, 'user_id': user_id},
                  success: function(data){
                    console.log(data.success)
                  }
              });
          })
        })
      </script>

@endsection