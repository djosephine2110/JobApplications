@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
    <h2>Pekerjaan yang dilamar</h2>


    <form action="/kerjaan" method='POST'>
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nama Posisi yang diinginkan</label>
              <input type="text" class="form-control @error('job_name') is-invalid @enderror"  required autocomplete="job_name" name="job_name" id="job_name" placeholder="{{Auth::user()->category}}" value="{{Auth::user()->category}}">
              @error('job_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="phone">Posisi</label>
              <input type="text" class="form-control @error('job_position') is-invalid @enderror" name="job_position" id="position" placeholder="" value="{{ old('job_position') }}" required autocomplete="job_position">
              @error('job_position')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="address">Gaji yang diharapkan</label>
              <input type="text" class="form-control @error('job_salary') is-invalid @enderror" name="job_salary" id="name" placeholder="" value="{{ old('job_salary') }}" required autocomplete="job_salary">
              @error('job_salary')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="position">Fasilitas yang diharapkan</label>
              <input type="text" class="form-control @error('job_facilities') is-invalid @enderror" name="job_facilities" id="position" placeholder="" value="{{ old('job_facilities') }}" required autocomplete="job_facilities">
              @error('job_facilities')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="address">Mulai</label>
              <input type="date" class="form-control @error('job_starts') is-invalid @enderror" name="job_starts" id="name" placeholder="" value="{{ old('job_starts') }}" required autocomplete="job_starts">
              @error('job_starts')
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
