@extends('layouts.app')

@section('content')

<h2>Referensi</h2>
<div class="mt-2">
</div>
@foreach($details as $e)

<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.507);">
    <div class="card-body">
        <h4 class="card-title">Bio Review Page</h4>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Name:</label> {{$e->name}}
          </div>
          <div class="form-group col-md-6">
            <label for="ktp">KTP:</label> {{$e->ktp}}
          </div>
        </div>
  
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="birth_place">Tempat Lahir: </label>{{$e->birth_place}}
          </div>
          <div class="form-group col-md-6">
            <label for="dob">Tanggal Lahir: </label> {{$e->dob}}
          </div>
        </div>
  
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="gender">Jenis Kelamin :</label> {{$e->gender}}
            <br>
            
            
          </div>
          <div class="form-group col-md-6">
            <label for="religion">Agama: </label> {{$e->religion}}
                         
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="address">Alamat: </label> {{$e->address}}
          </div>
          <div class="form-group col-md-6">
            <label for="zipcode">Kode Pos: </label> {{$e->zipcode}}
          </div>
        </div>
  
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="phone">Nomor Telepon: </label> {{$e->phone}}
          </div>
          <div class="form-group col-md-6">
            <label for="home_number">Telepon Rumah: </label> {{$e->home_number}}
          </div>
        </div>
  
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="sim_a">SIM A: </label> {{$e->sim_a}}
          </div>
          <div class="form-group col-md-6">
            <label for="sim_c">SIM C: </label> {{$e->sim_c}}
          </div>
        </div>
      
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="vehicle">Kendaraan: </label> {{$e->vehicle}}
           
          </div>
          <div class="form-group col-md-6">
            <label for="hobby">Hobi: </label> {{$e->hobby}}
          </div>
        </div>
      
  
      

    <a  class="btn btn-sm btn-primary" href=" {{route('user-detail.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('user-detail.destroy', $e)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>


@endforeach


<div class="text-right">
    <a class=" btn btn-primary mt-3" href=" {{route('skill.index')}} " role="button">Next</a>
</div>


@endsection
