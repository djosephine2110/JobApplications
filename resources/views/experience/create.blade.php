@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.507);">
  <div class="card-body">
<div class="container">
    <h2>Pengalaman Kerja</h2>


    <form action="/experience" method='POST'>
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="company_name">Nama Perusahaan</label>
              <input type="text" class="form-control" name="company_name" id="name" placeholder="example: Erakomp">
            </div>
            <div class="form-group col-md-6">
              <label for="position">Jabatan</label>
              <input type="text" class="form-control" name="position" id="position" placeholder="example: Manager">
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="from">Dari</label>
              <input type="date" class="form-control" name="from" id="name" placeholder="">
            </div>
            <div class="form-group col-md-6">
              <label for="to">Sampai</label>
              <input type="date" class="form-control" name="to" id="to" placeholder="">
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="salary">Jumlah Gaji</label>
              <input type="text" class="form-control" name="salary" id="name" placeholder="example: Rp. 1000000">
            </div>
            <div class="form-group col-md-6">
              <label for="reason">Alasan Keluar</label>
              <input type="text" class="form-control" name="reason" id="reason" placeholder="">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="description">Deskripsi Pekerjaan</label>
              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
          </div>
        
        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>

  </div>
</div>
@endsection
