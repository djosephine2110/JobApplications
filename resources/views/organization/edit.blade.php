@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
    <h2>Edit Organisasi</h2>

    <form action="{{route('organization.update', $organization)}}" method='POST'>
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nama Organisasi</label>
              <input type="text" class="form-control" name="name" id="name" value="{{$organization->name}}">
            </div>
            <div class="form-group col-md-6">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" name="address" id="position" value="{{$organization->address}}">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="position">Posisi</label>
              <input type="text" class="form-control" name="position" id="name" value="{{$organization->position}}">
            </div>
            <div class="form-group col-md-6">
              <label for="from">Dari</label>
              <input type="date" class="form-control" name="from" id="position" value="{{$organization->from}}">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="to">Sampai</label>
              <input type="date" class="form-control" name="to" id="name" value="{{$organization->to}}">
            </div>
           
          </div>
        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>
  </div>
</div>

@endsection
