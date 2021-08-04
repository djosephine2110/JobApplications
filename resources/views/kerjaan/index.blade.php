@extends('layouts.app')

@section('content')

<h2>Pekerjaan yang dilamar</h2>

@forelse($kerjaans as $e)

<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
    <div class="card-body">
        <h4 class="card-title"> {{$e->job_name}}  </h4>

        <ul>
            <li>Posisi yang diinginkan: {{ $e->job_position}}</li>
            <li>Gaji yang diharapkan: {{ $e->job_salary}}</li>
            <li>Fasilitas yang diharapkan: {{$e->job_facilities}}</li>
            <li>Dapat mulai bekerja: {{$e->job_starts}}</li>
        </ul>

    <a  class="btn btn-sm btn-primary" href=" {{route('kerjaan.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('kerjaan.destroy', $e)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>

@empty
<div class="mt-2">
  <a href=" {{route('kerjaan.create')}} " class="btn btn-primary mb-3">+ Pekerjaan yang dilamar</a>
</div>
@endforelse


<div class="row mt-3">
    <div class="col text-left">
        <a class="btn btn-secondary" href=" {{route('health.index')}} " role="button">Back</a>
    </div>

    <div class="col text-right">
        <a class=" btn btn-primary" href=" {{route('connection.index')}} " role="button">Next</a>
    </div>
</div>

@endsection
