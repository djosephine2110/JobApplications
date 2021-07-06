@extends('layouts.app')

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
          <th><img class="image rounded-circle" src="{{asset('/storage/images/'.$detail->image)}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; "></th>
            <th scope="row">{{$detail->name}}</th>
            <th>{{$detail->email}}</th>
            <td><a href="/test_detail/{{$detail->id}}">View</a></td>
            <td><a href="/download/{{$detail->id}}">Download</a></td>

          </tr>
          @endforeach
        </tbody>
      </table>
    
</div>


@endsection

