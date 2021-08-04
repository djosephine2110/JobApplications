@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
    <h2>Relasi</h2>


    <form action="/relation" method='POST'>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nama</label>
              <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="name" placeholder="example: John Doe" value="{{ old('name') }}" required autocomplete="name">
              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="relationship">Hubungan</label>
              <input type="text" class="form-control  @error('relationship') is-invalid @enderror" name="relationship" id="position" placeholder="example: Child" value="{{ old('relationship') }}" required autocomplete="relationship">
              @error('relationship')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="dob">Tanggal Lahir</label>
              <input type="date" class="form-control  @error('dob') is-invalid @enderror" name="dob" id="name" placeholder="example: Jalan ABC NO. 123" value="{{ old('dob') }}" required autocomplete="dob">
              @error('dob')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="job">Pekerjaan</label>
              <input type="text" class="form-control  @error('job') is-invalid @enderror" name="job" id="position" placeholder="example: Supervisor" value="{{ old('job') }}" required autocomplete="job">
              @error('job')
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
