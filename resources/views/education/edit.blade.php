@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
    <h2>Edit Pendidikan</h2>


    <form action="{{route('education.update', $education)}}" method='POST'>
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nama Institusi</label>
              <input type="text" name="school_name" class="form-control" id="inputEmail4" value="{{$education->school_name}}">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Alamat</label>
              <input type="text" name="school_location" class="form-control" id="inputPassword4" value="{{$education->school_location}}">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Degree</label>
              <select id="inputState" name="degree" class="form-control">
                <option value="{{$education->degree}}" selected>{{$education->degree}}</option>
                <option value="SMP">SMP</option>
                <option value="SMA/SMK">SMA/SMK</option>
  
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="Lainnya">Lainnya</option>
              </select>                  </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Major Studi</label>
              <input type="text" name="field_of_study" class="form-control" id="inputPassword4" value="{{$education->field_of_study}}">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Dari</label>
              <input type="date" name="graduation_start_date" class="form-control" id="inputEmail4" value="{{$education->graduation_start_date}}">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Sampai</label>
              <input type="date" name="graduation_end_date" class="form-control" id="inputPassword4" value="{{$education->graduation_end_date}}">
            </div>
          </div>
        
        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>

  </div>
</div>
@endsection
