@extends('layouts.admin')

@section('content')

<div class="container">

    <h2>Welcome to Erakomp Career</h2>
    <table class="table">
        <thead>
          <tr>
              <th>Profile Image</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($user as $detail)
          <tr>  
          @if($detail->is_admin !== 1)
            <th><img class="image img-thumbnail" src="{{asset('/storage/images/'.$detail->image)}}" alt="profile_image" style="max-width:100px;"></th>
            <th scope="row">{{$detail->name}}</th>
            <th>{{$detail->email}}</th>
            <td><a href="/test_detail/{{$detail->id}}"><i class="fas fa-eye mr-2"></i></a> 
            <a href="/download/{{$detail->id}}"><i class="fas fa-download"></i></a></td>
          
            @endif

          </tr>
          @endforeach
        </tbody>
      </table>
    
</div>


@endsection

