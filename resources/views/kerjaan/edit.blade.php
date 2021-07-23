@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
    <h2>Edit Referensi</h2>

    <form action="{{route('kerjaan.update', $kerjaan)}}" method='POST'>
        @csrf
        @method('PUT')
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Nama Posisi yang diinginkan</label>
            <input type="text" class="form-control" name="job_name" id="job_name" value={{$kerjaan->job_name}}>
          </div>
          <div class="form-group col-md-6">
            <label for="phone">Posisi</label>
            <input type="text" class="form-control" name="job_position" id="position" value={{$kerjaan->job_position}}>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="address">Gaji yang diharapkan</label>
            <input type="text" class="form-control" name="job_salary" id="name" value={{$kerjaan->job_salary}}>
          </div>
          <div class="form-group col-md-6">
            <label for="position">Fasilitas yang diharapkan</label>
            <input type="text" class="form-control" name="job_facilities" id="position" value={{$kerjaan->job_facilities}}>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="address">Mulai</label>
            <input type="date" class="form-control" name="job_starts" id="name" value={{$kerjaan->job_starts}}>
          </div>
         
        </div>
      
        <input type="submit" value="Save" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>
  </div>
</div>

@endsection
