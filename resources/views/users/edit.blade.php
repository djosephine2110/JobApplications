@extends('layouts.adm')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        
        <div class="card" style="width: 24rem;">
            <div class="card-header" style="font-size: 21px;"><b>
            Edit Status</b>
            
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('users.update', $user->id) }}" id="myForm">
            @csrf
            @method('PUT')
            <img class="image img-thumbnail mb-3" src="/storage/images/{{$user->image}}" alt="profile_image" style="max-width:300px;">

                <div class="form-group">

                    <label for="name">Name: </label>                    
                    <label for="">{{$user->name}}</label>  
                    
                </div>
                <br>
                <div class="form-group">
                    <label for="email">Email: </label>                    
                    <label for="">{{$user->email}}</label>
                </div>
                <br>
                <div class="form-group">
                    <label for="writer">Status</label>                    
                    <select name="status" id="" >
                        <option value="{{$user->status}}">{{$user->status}}</option>
                        <option value="On Hold">On Hold</option>
                        <option value="In Progress">In Progress</option>

                    </select>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class=" btn btn-primary" href=" /admin/home" role="button">Back</a>

            </form>
            </div>
        </div>
    </div>
</div>
@endsection