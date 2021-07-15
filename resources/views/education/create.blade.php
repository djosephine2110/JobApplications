@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
    <h2>Pendidikan</h2>


    <form action="/education" method='POST'>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nama Institusi</label>
              <input type="text" name="school_name" class="form-control" id="inputEmail4" placeholder="">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Alamat</label>
              <input type="text" name="school_location" class="form-control" id="inputPassword4" placeholder="">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Degree</label>
              <select id="inputState" name="degree" class="form-control">
                <option selected>Choose...</option>
                <option value="SMP">SMP</option>
                <option value="SMA/SMK">SMA/SMK</option>
  
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="Lainnya">Lainnya</option>
              </select>      
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Major Studi</label>
              <input type="text" name="field_of_study" class="form-control" id="inputPassword4" placeholder="">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Dari</label>
              <input type="date" name="graduation_start_date" class="form-control" id="inputEmail4" placeholder="">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Sampai</label>
              <input type="date" name="graduation_end_date" class="form-control" id="inputPassword4" placeholder="">
            </div>
          </div>
        
        <br>
        <input type="submit" class="btn btn-primary mt-3" value="Save" style="margin-left:50%; margin-right:50%;">

    </form>

</div>

  </div>
</div>
@endsection
