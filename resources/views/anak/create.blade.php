@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Anak</h2>


    <form action="/anak" method='POST'>
        @csrf

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nama</label>
            <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Jenis Kelamin</label>
            <select id="inputState" name="gender" class="form-control">
              <option value="" selected>Choose...</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
  
  
            </select>            
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Tanggal Lahir</label>
            <input type="date" name="dob" class="form-control" id="inputEmail4" placeholder="">
          </div>
          <div class="form-group col-md-6">
              <label for="inputEmail4">Pendidikan</label>
              <select id="inputState" name="education" class="form-control">
                  <option value="" selected>Choose...</option>
                  <option value="SD">SD</option>
                  <option value="SMP">SMP</option>
                  <option value="SMA/SMK">SMA/SMK</option>
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                  <option value="Lainnya">Lainnya</option>

      
                </select>      
              </div>
        </div>
      
        
        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>


@endsection
