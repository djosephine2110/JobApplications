@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
    <h2>Pekerjaan yang dilamar</h2>


    <form action="/kerjaan" method='POST'>
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nama Posisi yang diinginkan</label>
              <input type="text" class="form-control" name="job_name" id="job_name" placeholder="{{Auth::user()->category}}" value="{{Auth::user()->category}}">
            </div>
            <div class="form-group col-md-6">
              <label for="phone">Posisi</label>
              <input type="text" class="form-control" name="job_position" id="position" placeholder="">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="address">Gaji yang diharapkan</label>
              <input type="text" class="form-control" name="job_salary" id="name" placeholder="">
            </div>
            <div class="form-group col-md-6">
              <label for="position">Fasilitas yang diharapkan</label>
              <input type="text" class="form-control" name="job_facilities" id="position" placeholder="">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="address">Mulai</label>
              <input type="date" class="form-control" name="job_starts" id="name" placeholder="">
            </div>
           
          </div>
        

        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>

</div>
</div>
@endsection
