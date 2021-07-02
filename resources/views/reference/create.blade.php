@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Referensi</h2>


    <form action="/reference" method='POST'>
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nama</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="example: John Doe">
            </div>
            <div class="form-group col-md-6">
              <label for="phone">Nomor Telepon</label>
              <input type="text" class="form-control" name="phone" id="position" placeholder="example: 1234567890">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" name="address" id="name" placeholder="example: Jalan ABC NO. 123">
            </div>
            <div class="form-group col-md-6">
              <label for="position">Jabatan</label>
              <input type="text" class="form-control" name="position" id="position" placeholder="example: Supervisor">
            </div>
          </div>
        

        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>


@endsection
