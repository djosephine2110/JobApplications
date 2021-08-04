@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
    <h2>Organisasi</h2>


    <form action="/organization" method='POST'>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nama Organisasi</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nama Organisasi" value="{{ old('name') }}" required autocomplete="name">
            </div>
            <div class="form-group col-md-6">
              <label for="address">Alamat</label>
              <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="position" placeholder="" value="{{ old('address') }}" required autocomplete="address">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="position">Posisi</label>
              <input type="text" class="form-control @error('position') is-invalid @enderror" name="position" id="name" placeholder="example: Vice President" value="{{ old('position') }}" required autocomplete="position">
            </div>
            <div class="form-group col-md-6">
              <label for="from">Dari</label>
              <input type="date" class="form-control @error('from') is-invalid @enderror" name="from" id="position" placeholder="example: Supervisor" value="{{ old('from') }}" required autocomplete="from">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="to">Sampai</label>
              <input type="date" class="form-control @error('to') is-invalid @enderror" name="to" id="name" placeholder="example: Jalan ABC NO. 123" value="{{ old('to') }}" required autocomplete="to">
            </div>
           
          </div>

       
        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left: 46%; margin-right:50%;">

    </form>

</div>
  </div>
</div>

@endsection
