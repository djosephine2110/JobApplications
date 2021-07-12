@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.507);">
  <div class="card-body">
<div class="container">
    <h2>Tell us something about you</h2>


    <form action="{{route('user-detail.update', $userDetail)}} " method='POST'>
        @csrf
        @method('PUT')
        @extends('layouts.app')

        @section('content')
        
        <div class="container">
        <h2>Edit Data Diri</h2>
        
        
        <form action="/user-detail" method='POST'>
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Nama Lengkap</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{$userDetail->name}}">
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
                  <input type="text" class="form-control" name="address" id="address" value="{{$userDetail->address}}">
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
                  <select id="inputState" class="form-control" name="vehicle">
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
            
        
            
            
        
            <input type="submit" class="btn btn-primary" value="Submit" style="margin-left: 46%; margin-right:50%;">
        
        </form>
        
        </div>
        
        
        @endsection
        
        <x-form.text name="fullname" :value="$userDetail->fullname"></x-form.text>
        <x-form.text name="email" type="email" :value="$userDetail->email"></x-form.text>
        <x-form.text name="phone" :value="$userDetail->phone"></x-form.text>
        <x-form.text name="address" :value="$userDetail->address"></x-form.text>

        <x-form.textarea name="summary" :value="$userDetail->summary"></x-form.textarea>

        <x-form.submit> </x-form.submit>

    </form>

</div>

  </div>
</div>
@endsection
