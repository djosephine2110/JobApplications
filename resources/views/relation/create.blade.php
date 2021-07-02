@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Relasi</h2>


    <form action="/relation" method='POST'>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nama</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="example: John Doe">
            </div>
            <div class="form-group col-md-6">
              <label for="relationship">Hubungan</label>
              <input type="text" class="form-control" name="relationship" id="position" placeholder="example: Child">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="dob">Tanggal Lahir</label>
              <input type="date" class="form-control" name="dob" id="name" placeholder="example: Jalan ABC NO. 123">
            </div>
            <div class="form-group col-md-6">
              <label for="job">Pekerjaan</label>
              <input type="text" class="form-control" name="job" id="position" placeholder="example: Supervisor">
            </div>
          </div>
        

       

        

        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>


@endsection
