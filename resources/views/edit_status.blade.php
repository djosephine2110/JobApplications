@extends('layouts.adm')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
    <h2>User</h2>


    <form action="{{ route('register') }}" method='POST'>
        @csrf

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="title">Nama Lengkap</label>
            <input type="text" class="form-control" name="name" id="name" placeholder={{$user->name}}>
          </div>
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <textarea type="text" class="form-control" name="email" id="position" placeholder=""></textarea>
          </div>
        </div>
  
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="is_admin">Status</label>
              <input type="text" class="form-control" name="is_admin" id="name" placeholder={{$user->name}}>
            </div>
            <div class="form-group col-md-6">
              <label for="status">Status Application</label>
              <textarea type="text" class="form-control" name="status" id="position" placeholder=""></textarea>
            </div>
          </div>

          
        
        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>

  </div>
</div>
@endsection
