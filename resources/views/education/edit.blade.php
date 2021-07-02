@extends('layouts.app')

@section('content')

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
              <input type="text" name="degree" class="form-control" id="inputEmail4" value="{{$education->degree}}">
            </div>
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


@endsection
