@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.507);">
  <div class="card-body">
<div class="container">
    <h2>Edit Koneksi</h2>

    <form action="{{route('connection.update', $connection)}}" method='POST'>
        @csrf
        @method('PUT')

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$connection->name}}">
          </div>
          <div class="form-group col-md-6">
            <label for="position">Jabatan</label>
            <input type="text" class="form-control" name="position" id="position" value="{{$connection->position}}">
          </div>
        </div>
  
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="from">Hubungan</label>
            <input type="text" class="form-control" name="relationship" id="name" value="{{$connection->relationship}}">
          </div>
          
        </div>
  
        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>
  </div>
</div>

@endsection
