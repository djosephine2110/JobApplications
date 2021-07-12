@extends('layouts.app')

@section('content')

<h2>Rekomendasi Dari Perusahaan (jika ada)</h2>
<div class="mt-2">
    <a href=" {{route('connection.create')}} " class="btn btn-primary mb-3">+ Rekomendasi</a>
</div>
@foreach($connections as $e)

<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.507);">
    <div class="card-body">

        <ul>
            <li>Nama: {{ $e->name}}</li>
            <li>Posisi: {{ $e->position}}</li>
            <li>Hubungan: {{ $e->relationship}}</li>
        </ul>

    <a  class="btn btn-sm btn-primary" href=" {{route('connection.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('connection.destroy', $e)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>


@endforeach


<div class="text-right">
    <a class=" btn btn-primary mt-3" href=" {{route('image.create')}} " role="button">Next</a>
</div>


@endsection
