@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Work Detail</h2>

    <form action="{{route('relation.update', $relation)}}" method='POST'>
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nama</label>
              <input type="text" class="form-control" name="name" id="name" value="{{$relation->name}}">
            </div>
            <div class="form-group col-md-6">
              <label for="relationship">Hubungan</label>
              <input type="text" class="form-control" name="relationship" id="position" value="{{$relation->relationship}}">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="dob">Tanggal Lahir</label>
              <input type="date" class="form-control" name="dob" id="name" value="{{$relation->dob}}">
            </div>
            <div class="form-group col-md-6">
              <label for="job">Pekerjaan</label>
              <input type="text" class="form-control" name="job" id="position" value="{{$relation->job}}">
            </div>
          </div>
        
        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>


@endsection
