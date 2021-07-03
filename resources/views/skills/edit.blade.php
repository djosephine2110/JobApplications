@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Keahlian</h2>

    <form action="{{route('skill.update', $skill)}}" method='POST'>
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nama Keahlian</label>
              <input type="text" class="form-control" name="name" id="inputEmail4" value="{{$skill->name}}">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Penilaian</label>
              <select id="inputState" name="rating" class="form-control">
                <option value="{{$skill->rating}}" selected>{{$skill->rating}}</option>
                <option value="Sangat Baik">Sangat Baik</option>
  
                <option value="Baik">Baik</option>
                <option value="Cukup">Cukup</option>
  
                <option value="Kurang">Kurang</option>
                <option value="Sangat Kurang">Sangat Kurang</option>
  
              </select>
              </div>
          </div>

        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>


@endsection
