@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
  <div class="card-body">
<div class="container">
    <h2>Pengalaman Kerja</h2>


    <form action="/experience" method='POST'>
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="company_name">Nama Perusahaan</label>
              <input type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" id="name" placeholder="example: Erakomp" value="{{ old('company_name') }}" required autocomplete="company_name">
              @error('company_name')
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
              <label for="from">Dari</label>
              <input type="date" class="form-control @error('from') is-invalid @enderror" name="from" id="name" placeholder="" value="{{ old('from') }}" required autocomplete="from">
              @error('from')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="to">Sampai</label>
              <input type="date" class="form-control @error('to') is-invalid @enderror" name="to" id="to" placeholder="" value="{{ old('to') }}" required autocomplete="to">
              @error('to')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="salary">Jumlah Gaji</label>
              <input type="text" class="form-control @error('salary') is-invalid @enderror" name="salary" id="name" placeholder="example: Rp. 1000000" value="{{ old('salary') }}" required autocomplete="salary">
              @error('salary')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="reason">Alasan Keluar</label>
              <input type="text" class="form-control @error('reason') is-invalid @enderror" name="reason" id="reason" placeholder="" value="{{ old('reason') }}" required autocomplete="reason">
              @error('reason')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="description">Deskripsi Pekerjaan</label>
              <textarea class="form-control " name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
          </div>
        
        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>

  </div>
</div>
@endsection
