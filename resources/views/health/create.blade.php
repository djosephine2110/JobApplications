@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
    <h2>Kesehatan</h2>


    <form action="/health" method='POST'>
        @csrf

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Golongan Darah</label>
            <select id="inputState" name="blood_type" class="form-control @error('blood_type') is-invalid @enderror" value="{{ old('blood_type') }}" required autocomplete="blood_type">
              <option value="">Choose...</option>
              <option value="A">A</option>
              <option value="B">B</option>

              <option value="AB">AB</option>
              <option value="O">O</option>
            </select>          
            @error('blood_type')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Penyakit Ringan (jika ada)</label>
            <input type="text" class="form-control " name="light_disease" id="position" placeholder="" >
           
            </div>
        </div>
    
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="from">Penyakit Berat (jika ada)</label>
              <input type="text" class="form-control " id="name" placeholder="" >
            </div>
            <div class="form-group col-md-6">
              <label for="to">Pernah Dirawat</label>
              <select id="inputState" name="opname" class="form-control @error('opname') is-invalid @enderror" value="{{ old('opname') }}" required autocomplete="opname">
                <option value="">Choose...</option>
                <option value="Pernah">Pernah</option>
                <option value="Belum Pernah">Belum Pernah</option>
  
              </select> 
              
              </div>
          </div>
    
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="salary">Alasan dirawat (jika pernah)</label>
              <input type="text" class="form-control" name="alasan" id="name" placeholder="" >
             
            </div>
            <div class="form-group col-md-6">
              <label for="to">Pengelihatan</label>
              <select id="inputState" name="eyesight" class="form-control @error('eyesight') is-invalid @enderror" value="{{ old('eyesight') }}" required autocomplete="eyesight">
                <option value="">Choose...</option>
                <option value="Sangat Baik">Sangat Baik</option>

              <option value="Baik">Baik</option>
            <option value="Cukup">Cukup</option>
            <option value="Kurang">Kurang</option>
            <option value="Sangat Kurang">Sangat Kurang</option>


  
              </select> 
              @error('eyesight')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="to">Pendengaran</label>
              <select id="inputState" name="hearing" class="form-control @error('hearing') is-invalid @enderror" value="{{ old('hearing') }}" required autocomplete="hearing">
                <option value="">Choose...</option>
                <option value="Sangat Baik">Sangat Baik</option>

                <option value="Baik">Baik</option>
              <option value="Cukup">Cukup</option>
              <option value="Kurang">Kurang</option>
              <option value="Sangat Kurang">Sangat Kurang</option>
  

  
              </select> 
              @error('hearing')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="to">Kesehatan</label>
              <select id="inputState" name="health" class="form-control @error('health') is-invalid @enderror" value="{{ old('health') }}" required autocomplete="health">
                <option value="">Choose...</option>
                <option value="Sangat Baik">Sangat Baik</option>

                <option value="Baik">Baik</option>
              <option value="Cukup">Cukup</option>
              <option value="Kurang">Kurang</option>
              <option value="Sangat Kurang">Sangat Kurang</option>
  
  
              </select> 
              @error('health')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
            </div>
            
          </div>
          <hr>
          <b>EMERGENCY CONTACT</b>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="from">Nama</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="" value="{{ old('name') }}" required autocomplete="name">
              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="from">Alamat</label>
              <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="name" placeholder="" value="{{ old('address') }}" required autocomplete="address">
              @error('address')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror  
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="from">Kode Pos</label>
              <input type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" id="name" placeholder="" value="{{ old('zipcode') }}" required autocomplete="zipcode">
              @error('zipcode')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="from">Nomor Telepon</label>
              <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="name" placeholder="" value="{{ old('phone') }}" required autocomplete="phone">
              @error('phone')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror  
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="from">Hubungan</label>
              <input type="text" class="form-control @error('relation') is-invalid @enderror" name="relation" id="name" placeholder="" value="{{ old('relation') }}" required autocomplete="relation">
              @error('relation')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
            
          </div>
        
        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>

  </div>
</div>
@endsection
