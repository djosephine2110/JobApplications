@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
    <h2>Edit Data Diri</h2>

    <form action="{{route('user-detail.update', $userDetail)}}" method='POST'>
        @csrf
        @method('PUT')

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control  " id="name" value="{{$userDetail->name}}">
           
          </div>
          <div class="form-group col-md-6">
            <label for="ktp">KTP</label>
            <input type="text" class="form-control" name="ktp" id="ktp" value="{{$userDetail->ktp}}">
          
          </div>
        </div>
  
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="birth_place">Tempat Lahir</label>
            <input type="text" class="form-control" name="birth_place" id="birth_place" value="{{$userDetail->birth_place}}">
          
          </div>
          <div class="form-group col-md-6">
            <label for="dob">Tanggal Lahir</label>
            <input type="date" class="form-control" name="dob" id="dob" value="{{$userDetail->dob}}">
          
          </div>
        </div>
  
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="gender">Jenis Kelamin</label>
            <select id="inputState" name="gender" class="form-control @error('gender') is-invalid @enderror" value="{{ old('gender') }}" required autocomplete="gender">
              <option value="{{$userDetail->gender}}" >{{$userDetail->gender}}</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
              </select>    
            
          </div>
          <div class="form-group col-md-6">
            <label for="religion">Agama</label>
            <select id="inputState" class="form-control" name="religion" value="{{$userDetail->religion}}">
              <option value="{{$userDetail->religion}}">{{$userDetail->religion}}</option>
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
            <input type="text" class="form-control" name="address" id="address" value="{{$userDetail->address}}" >
          
          </div>
          <div class="form-group col-md-6">
            <label for="zipcode">Kode Pos</label>
            <input type="text" class="form-control" name="zipcode" id="zipcode" value="{{$userDetail->zipcode}}">
           
          </div>
        </div>
  
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="phone">Nomor Telepon</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{$userDetail->phone}}">
           
          </div>
          <div class="form-group col-md-6">
            <label for="home_number">Telepon Rumah</label>
            <input type="text" class="form-control" name="home_number" id="home_number" value="{{$userDetail->home_number}}">
          
          </div>
        </div>
  
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="sim_a">SIM A</label>
            <input type="text" class="form-control" name="sim_a" id="sim_a" value="{{$userDetail->sim_a}}">
          
          </div>
          <div class="form-group col-md-6">
            <label for="sim_c">SIM C</label>
            <input type="text" class="form-control" name="sim_c" id="sim_c" value="{{$userDetail->sim_c}}">
          
          </div>
        </div>
      
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="vehicle">Kendaraan</label>
            <select id="inputState" class="form-control" name="vehicle" value="{{$userDetail->vehicle}}">
              <option value="{{$userDetail->vehicle}}">{{$userDetail->vehicle}}</option>
              <option value="Mobil">Mobil</option>
              <option value="Motor">Motor</option>
              <option value="Lainnya">Lainnya</option>
  
            </select> 
               
          </div>
          <div class="form-group col-md-6">
            <label for="hobby">Hobi</label>
            <input type="text" class="form-control" name="hobby" id="hobby" value="{{$userDetail->hobby}}">
          
          </div>
        </div>
      
        <input type="submit" value="Save" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>
  </div>
</div>

@endsection
