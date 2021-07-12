@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.507);">
  <div class="card-body">
<div class="container">
    <h2>Koneksi</h2>


    <form action="/connection" method='POST'>
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nama</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="example: John Doe">
            </div>
            <div class="form-group col-md-6">
              <label for="position">Jabatan</label>
              <input type="text" class="form-control" name="position" id="position" placeholder="example: Manager">
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="from">Hubungan</label>
              <input type="text" class="form-control" name="relationship" id="name" placeholder="example: Friend">
            </div>
            
          </div>
    
         
        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>

  </div>
</div>
@endsection
