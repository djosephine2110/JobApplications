@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.507);">
  <div class="card-body">
<div class="container">
    <h2>Edit Data Kesehatan</h2>

    <form action="{{route('health.update', $health)}}" method='POST'>
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Golongan Darah</label>
              <select id="inputState" name="blood_type" class="form-control">
                <option value="{{$health->blood_type}}" selected>{{$health->blood_type}}</option>
                <option value="A">A</option>
                <option value="B">B</option>
  
                <option value="AB">AB</option>
                <option value="O">O</option>
              </select>          
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Penyakit Ringan (jika ada)</label>
              <input type="text" class="form-control" name="light_disease" id="position" value="{{$health->light_disease}}">
  
              </div>
          </div>
      
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="from">Penyakit Berat (jika ada)</label>
                <input type="text" class="form-control" name="heavy_disease" id="name" value="{{$health->heavy_disease}}">
              </div>
              <div class="form-group col-md-6">
                <label for="to">Pernah Dirawat</label>
                <select id="inputState" name="opname" class="form-control">
                  <option value="{{$health->opname}}" selected>{{$health->opname}}</option>
                  <option value="Pernah">Pernah</option>
                  <option value="Belum Pernah">Belum Pernah</option>
    
                </select> 
                </div>
            </div>
      
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="salary">Alasan dirawat (jika pernah)</label>
                <input type="text" class="form-control" name="alasan" id="name" value="{{$health->alasan}}">
              </div>
              <div class="form-group col-md-6">
                <label for="to">Pengelihatan</label>
                <select id="inputState" name="eyesight" class="form-control">
                  <option value="{{$health->eyesight}}" selected>{{$health->eyesight}}</option>
                  <option value="Sangat Baik">Sangat Baik</option>

              <option value="Baik">Baik</option>
            <option value="Cukup">Cukup</option>
            <option value="Kurang">Kurang</option>
            <option value="Sangat Kurang">Sangat Kurang</option>

  
    
                </select> 
              </div>
            </div>
  
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="to">Pendengaran</label>
                <select id="inputState" name="hearing" class="form-control">
                  <option value="{{$health->hearing}}" selected>{{$health->hearing}}</option>
                  <option value="Sangat Baik">Sangat Baik</option>

              <option value="Baik">Baik</option>
            <option value="Cukup">Cukup</option>
            <option value="Kurang">Kurang</option>
            <option value="Sangat Kurang">Sangat Kurang</option>

    
                </select> 
              </div>
              <div class="form-group col-md-6">
                <label for="to">Kesehatan</label>
                <select id="inputState" name="health" class="form-control">
                  <option selected>{{$health->health}}</option>
                  <option value="Sangat Baik">Sangat Baik</option>

              <option value="Baik">Baik</option>
            <option value="Cukup">Cukup</option>
            <option value="Kurang">Kurang</option>
            <option value="Sangat Kurang">Sangat Kurang</option>

  
    
                </select> 
              </div>
              
            </div>
            <hr>
            <b>EMERGENCY CONTACT</b>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="from">Nama</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$health->name}}">
              </div>
              <div class="form-group col-md-6">
                <label for="from">Alamat</label>
                <input type="text" class="form-control" name="address" id="name" value="{{$health->address}}">
                </div>
            </div>
  
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="from">Kode Pos</label>
                <input type="text" class="form-control" name="zipcode" id="name" value="{{$health->zipcode}}">
              </div>
              <div class="form-group col-md-6">
                <label for="from">Nomor Telepon</label>
                <input type="text" class="form-control" name="phone" id="name" value="{{$health->phone}}">
                </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="from">Hubungan</label>
                <input type="text" class="form-control" name="relation" id="name" value="{{$health->relation}}">
              </div>
              
            </div>

        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>
  </div>
</div>


@endsection
