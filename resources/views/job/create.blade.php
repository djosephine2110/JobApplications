@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.507);">
  <div class="card-body">
<div class="container">
    <h2>Pekerjaan yang Dilamar</h2>


    <form action="/job" method='POST'>
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="company_name">Nama Posisi yang diinginkan</label>
              <input type="text" class="form-control" name="job_name" id="name" >
            </div>
            <div class="form-group col-md-6">
              <label for="position">Posisi</label>
              <input type="text" class="form-control" name="job_position" id="position" >
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="company_name">Gaji yang diharapkan</label>
              <input type="text" class="form-control" name="job_salary" id="name" >
            </div>
            <div class="form-group col-md-6">
              <label for="position">Fasilitas yang diharapkan</label>
              <input type="text" class="form-control" name="job_facilities" id="position" >
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="from">Mulai</label>
              <input type="date" class="form-control" name="job_starts" id="name">
            </div>
           
          </div>
    
          
        
        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>
  </div>
</div>

@endsection
