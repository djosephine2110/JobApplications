@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
<h2>Data Diri</h2>


<form action="/user-detail" method='POST'>
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Nama Lengkap</label>
          <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="name" placeholder="example: John Doe" value="{{ old('name') }}" required autocomplete="name">
          @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group col-md-6">
          <label for="ktp">KTP</label>
          <input type="text" class="form-control @error('ktp') is-invalid @enderror" name="ktp" id="ktp" placeholder="KTP" value="{{ old('ktp') }}" required autocomplete="ktp">
          @error('ktp')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="birth_place">Tempat Lahir</label>
          <input type="text" class="form-control @error('birth_place') is-invalid @enderror" name="birth_place" id="birth_place" placeholder="Tempat Lahir" value="{{ old('birth_place') }}" required autocomplete="birth_place">
         @error('birth_place')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group col-md-6">
          <label for="dob">Tanggal Lahir</label>
          <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" id="dob" placeholder="" value="{{ old('dob') }}" required autocomplete="dob">
         @error('dob')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="gender">Jenis Kelamin</label>
          <br>
          <div class="form-check form-check-inline @error('gender') is-invalid @enderror" value="{{ old('gender') }}" required autocomplete="gender">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Laki-Laki">
           
            <label class="form-check-label" for="Laki-laki">Laki-laki</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Perempuan">
          
            <label class="form-check-label" for="Perempuan">Perempuan</label>
          </div>
          @error('gender')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
        </div>
        <div class="form-group col-md-6">
          <label for="religion">Agama</label>
          <select id="inputState" class="form-control @error('religion') is-invalid @enderror" name="religion" value="{{ old('religion') }}" required autocomplete="religion">
            <option value="{{ old('religion') }}" required autocomplete="religion">{{ old('religion') ?? 'Silahkan Pilih' }}</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Buddha">Buddha</option>
            <option value="Hindu">Hindu</option>
            <option value="Lainnya">Lainnya</option>

          </select>     
          @error('religion')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror           
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="address">Alamat</label>
          <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="Alamat" value="{{ old('address') }}" required autocomplete="address">
         @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group col-md-6">
          <label for="zipcode">Kode Pos</label>
          <input type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" id="zipcode" placeholder="Kode Pos" value="{{ old('zipcode') }}" required autocomplete="zipcode">
         @error('zipcode')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="phone">Nomor Telepon</label>
          <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Telepon 1" value="{{ old('phone') }}" required autocomplete="phone">
         @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
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
          <select id="inputState" class="form-control @error('vehicle') is-invalid @enderror" name="vehicle" value="{{ old('vehicle') }}" required autocomplete="vehicle">
            <option value="{{ old('vehicle') }}" required autocomplete="vehicle">{{ old('vehicle') ?? 'Silahkan Pilih' }}</option>
            <option value="Mobil">Mobil</option>
            <option value="Motor">Motor</option>
            <option value="Lainnya">Lainnya</option>

          </select> 
          @error('vehicle')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror       
        </div>
        <div class="form-group col-md-6">
          <label for="hobby">Hobi</label>
          <input type="text" class="form-control @error('hobby') is-invalid @enderror" name="hobby" id="hobby" placeholder="Hobi" value="{{ old('hobby') }}" required autocomplete="hobby">
         @error('hobby')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>
    

    
    

    <input type="submit" class="btn btn-primary" value="Submit" style="margin-left: 46%; margin-right:50%;">

</form>

</div>
  </div>
</div>

@endsection
