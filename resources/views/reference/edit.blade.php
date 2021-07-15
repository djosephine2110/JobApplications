@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
    <h2>Edit Referensi</h2>

    <form action="{{route('reference.update', $reference)}}" method='POST'>
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nama</label>
              <input type="text" class="form-control" name="name" id="name" value="{{$reference->name}}">
            </div>
            <div class="form-group col-md-6">
              <label for="phone">Nomor Telepon</label>
              <input type="text" class="form-control" name="phone" id="position" value="{{$reference->phone}}">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" name="address" id="name" value="{{$reference->address}}">
            </div>
            <div class="form-group col-md-6">
              <label for="position">Jabatan</label>
              <input type="text" class="form-control" name="position" id="position" value="{{$reference->position}}">
            </div>
          </div>
        


        <input type="submit" value="Save" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>
  </div>
</div>

@endsection
