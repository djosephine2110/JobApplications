@extends('layouts.app')

@section('content')

<div class="container">
<h2>Tell us something about you</h2>


<form action="/user-detail" method='POST'>
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="example: John Doe">
        </div>
        <div class="form-group col-md-6">
          <label for="ktp">KTP</label>
          <input type="text" class="form-control" name="ktp" id="ktp" placeholder="KTP">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="birth_place">Tempat Lahir</label>
          <input type="text" class="form-control" name="birth_place" id="birth_place" placeholder="Tempat Lahir">
        </div>
        <div class="form-group col-md-6">
          <label for="dob">Tanggal Lahir</label>
          <input type="date" class="form-control" name="dob" id="dob" placeholder="">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="gender">Jenis Kelamin</label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Laki-Laki">
            <label class="form-check-label" for="Laki-laki">Laki-laki</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Perempuan">
            <label class="form-check-label" for="Perempuan">Perempuan</label>
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="religion">Agama</label>
          <select id="inputState" class="form-control" name="religion">
            <option value="">Choose...</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Buddha">Buddha</option>
            <option value="Hindu">Hindu</option>
            <option value="Lainnya">Lainnya</option>

          </select>                
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="address">Alamat</label>
          <input type="text" class="form-control" name="address" id="address" placeholder="Alamat">
        </div>
        <div class="form-group col-md-6">
          <label for="zipcode">Kode Pos</label>
          <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Kode Pos">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="phone">Nomor Telepon</label>
          <input type="text" class="form-control" name="phone" id="phone" placeholder="Telepon 1">
        </div>
        <div class="form-group col-md-6">
          <label for="home_number">Telepon Rumah</label>
          <input type="text" class="form-control" name="home_number" id="home_number" placeholder="Telepon 2">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="sim_a">SIM A</label>
          <input type="text" class="form-control" name="sim_a" id="sim_a" placeholder="SIM A">
        </div>
        <div class="form-group col-md-6">
          <label for="sim_c">SIM C</label>
          <input type="text" class="form-control" name="sim_c" id="sim_c" placeholder="SIM C">
        </div>
      </div>
    
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="vehicle">Kendaraan</label>
          <select id="inputState" class="form-control" name="vehicle">
            <option value="">Choose...</option>
            <option value="Mobil">Mobil</option>
            <option value="Motor">Motor</option>
            <option value="Lainnya">Lainnya</option>

          </select>        
        </div>
        <div class="form-group col-md-6">
          <label for="hobby">Hobi</label>
          <input type="text" class="form-control" name="hobby" id="hobby" placeholder="Hobi">
        </div>
      </div>
    

    
    

    <input type="submit" class="btn btn-primary" value="Submit" style="margin-left: 46%; margin-right:50%;">

</form>

</div>


@endsection
