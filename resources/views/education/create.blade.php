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
              <input type="text" name="school_name" class="form-control @error('school_name') is-invalid @enderror" id="inputEmail4" placeholder="" value="{{ old('school_name') }}" required autocomplete="school_name">
              @error('school_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror  
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Alamat</label>
              <input type="text" name="school_location" class="form-control @error('school_location') is-invalid @enderror" id="inputPassword4" placeholder="" value="{{ old('school_location') }}" required autocomplete="school_location">
              @error('school_location')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror  
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Degree</label>
              <select id="inputState" name="degree" class="form-control @error('degree') is-invalid @enderror" value="{{ old('degree') }}" required autocomplete="degree">
                <option selected>Choose...</option>
                <option value="SMP">SMP</option>
                <option value="SMA/SMK">SMA/SMK</option>
  
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="Lainnya">Lainnya</option>
              </select>      
              @error('degree')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror  
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Major Studi</label>
              <input type="text" name="field_of_study" class="form-control @error('field_of_study') is-invalid @enderror" id="inputPassword4" placeholder="" value="{{ old('field_of_study') }}" required autocomplete="field_of_study">
              @error('field_of_study')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror  
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Dari</label>
              <input type="date" name="graduation_start_date" class="form-control @error('graduation_start_date') is-invalid @enderror" id="inputEmail4" placeholder="" value="{{ old('graduation_start_date') }}" required autocomplete="graduation_start_date">
              @error('graduation_start_date')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror  
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Sampai</label>
              <input type="date" name="graduation_end_date" class="form-control @error('graduation_end_date') is-invalid @enderror" id="inputPassword4" placeholder="" value="{{ old('graduation_end_date') }}" required autocomplete="graduation_end_date">
              @error('graduation_end_date')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror  
            </div>
          </div>
        
        <br>
        <input type="submit" class="btn btn-primary mt-3" value="Save" style="margin-left:50%; margin-right:50%;">

    </form>

</div>

  </div>
</div>
@endsection
