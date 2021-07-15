@extends('layouts.app')

@section('content')

<h2>Referensi</h2>
<div class="mt-2">
    <a href=" {{route('reference.create')}} " class="btn btn-primary mb-3">+ Referensi</a>
</div>
@foreach($references as $e)

<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
    <div class="card-body">
        <h4 class="card-title"> {{$e->name}}  </h4>

        <ul>
            <li>Alamat: {{ $e->address}}</li>
            <li>Nomor Telepon: {{ $e->phone}}</li>
            <li>Jabatan: {{ $e->position}}</li>
        </ul>

    <a  class="btn btn-sm btn-primary" href=" {{route('reference.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('reference.destroy', $e)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>


@endforeach


<div class="text-right">
    <a class=" btn btn-primary mt-3" href=" {{route('married.create')}} " role="button">Next</a>
</div>


@endsection
