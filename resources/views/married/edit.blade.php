@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
    <h2>Tell us something about you</h2>


    <form action="{{route('married.update', $married)}} " method='POST'>
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Status Pernikahan</label>
              <select id="inputState" name="married_status" class="form-control">
                <option value="{{$married->married_status}}" selected>Choose...</option>
                <option value="Belum Menikah">Belum Menikah</option>
                <option value="Menikah">Menikah</option>
    
                <option value="Pisah">Pisah</option>
              </select>          
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Nama Pasangan</label>
              <input type="text" name="spouse_name" class="form-control" id="inputPassword4" value="{{$married->spouse_name}}">
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Tempat Lahir</label>
              <input type="text" name="spouse_bplace" class="form-control" id="inputEmail4" value="{{$married->spouse_bplace}}">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Tanggal Lahir</label>
              <input type="date" name="spouse_dob" class="form-control" id="inputPassword4" value="{{$married->spouse_dob}}">
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Pendidikan</label>
              <select id="inputState" name="spouse_education" class="form-control">
                <option value="{{$married->spouse_education}}" selected>{{$married->spouse_education}}</option>
                <option value="SMA/SMK">SMA/SMK</option>
                <option value="D3">D3</option>
    
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="Lainnya">Lainnya</option>
    
              </select>            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Pekerjaan</label>
              <input type="text" name="spouse_job" class="form-control" id="inputPassword4" value="{{$married->spouse_job}}">
            </div>
          </div>
        <x-form.submit> </x-form.submit>

    </form>

</div>
  </div>
</div>

@endsection
