@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.507);">
  <div class="card-body">
<div class="container">
    <h2>Organisasi</h2>


    <form action="/organization" method='POST'>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nama Organisasi</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Nama Organisasi">
            </div>
            <div class="form-group col-md-6">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" name="address" id="position" placeholder="">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="position">Posisi</label>
              <input type="text" class="form-control" name="position" id="name" placeholder="example: Vice President">
            </div>
            <div class="form-group col-md-6">
              <label for="from">Dari</label>
              <input type="date" class="form-control" name="from" id="position" placeholder="example: Supervisor">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="to">Sampai</label>
              <input type="date" class="form-control" name="to" id="name" placeholder="example: Jalan ABC NO. 123">
            </div>
           
          </div>

       
        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left: 46%; margin-right:50%;">

    </form>

</div>
  </div>
</div>

@endsection
