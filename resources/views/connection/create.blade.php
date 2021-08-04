@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
    <h2>Koneksi</h2>


    <form action="/connection" method='POST'>
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nama</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="example: John Doe" value="{{ old('name') }}" required autocomplete="name">
              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror  
            </div>
            <div class="form-group col-md-6">
              <label for="position">Jabatan</label>
              <input type="text" class="form-control @error('position') is-invalid @enderror" name="position" id="position" placeholder="example: Manager" value="{{ old('position') }}" required autocomplete="position">
              @error('position')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror  
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="from">Hubungan</label>
              <input type="text" class="form-control @error('relationship') is-invalid @enderror" name="relationship" id="name" placeholder="example: Friend" value="{{ old('relationship') }}" required autocomplete="relationship">
              @error('relationship')
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
