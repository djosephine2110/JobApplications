@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
    <h2>Keahlian Lain</h2>


    <form action="/skill" method='POST'>
        @csrf

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nama Keahlian</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="inputEmail4" value="{{ old('name') }}" required autocomplete="name">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Penilaian</label>
            <select id="inputState" name="rating" class="form-control @error('rating') is-invalid @enderror" value="{{ old('rating') }}" required autocomplete="rating">
              <option value="">Choose...</option>
              <option value="Sangat Baik">Sangat Baik</option>

              <option value="Baik">Baik</option>
              <option value="Cukup">Cukup</option>

              <option value="Kurang">Kurang</option>
              <option value="Sangat Kurang">Sangat Kurang</option>

            </select>
            @error('rating')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
            </div>
        </div>

        {{-- <div class="form-group">
          <label for="rating">Rating</label>
          <select class="form-control" name="rating" id="rating">

            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>

          </select>
        </div> --}}


        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:40%; margin-right:50%;">

    </form>

</div>
  </div>
</div>

@endsection
