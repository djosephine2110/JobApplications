@extends('layouts.app')

@section('content')

<h2>Kesehatan</h2>
<div class="mt-2">
</div>
@foreach($healths as $e)

<div class="card mb-2">
    <div class="card-body">
        <h4 class="card-title"> Kesehatan</h4>

        <ul>
            <li>Golongan Darah: {{ $e->blood_type}}</li>
            <li>Penyakit Ringan: {{ $e->light_disease}}</li>
            <li>Penyakit Berat: {{ $e->heavy_disease}}</li>
            <li>Dirawat: {{$e->opname}}</li>
            <li>Alasan dirawat: {{$e->alasan}}</li>
            <li>Pengelihatan: {{$e->eyesight}}</li>
            <li>Pendengaran: {{$e->hearing}}</li>
            <li>Kesehatan: {{$e->health}}</li>
        </ul>

    <a  class="btn btn-sm btn-primary" href=" {{route('health.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('health.destroy', $e)}}" method="POST" style="display: inline">
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
