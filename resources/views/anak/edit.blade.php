@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.507);">
  <div class="card-body">
<div class="container">
    <h2>Edit Anak</h2>

    <form action="{{route('anak.update', $anak)}}" method='POST'>
        @csrf
        @method('PUT')

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nama</label>
            <input type="text" name="name" class="form-control" id="inputEmail4" value="{{$anak->name}}">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Jenis Kelamin</label>
            <select id="inputState" name="gender" class="form-control">
              <option value="{{$anak->gender}}" selected>{{$anak->gender}}</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
  
  
            </select>            
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Tanggal Lahir</label>
            <input type="date" name="dob" class="form-control" id="inputEmail4" value="{{$anak->dob}}">
          </div>
          <div class="form-group col-md-6">
              <label for="inputEmail4">Pendidikan</label>
              <select id="inputState" name="education" class="form-control">
                  <option value="{{$anak->education}}" selected>{{$anak->education}}</option>
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
  </div>
</div>

@endsection
