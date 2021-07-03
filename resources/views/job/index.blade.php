@extends('layouts.app')

@section('content')

<h2>Pekerjaan yang dilamar</h2>
<div class="mt-2">
    <a href=" {{route('job.create')}} " class="btn btn-primary mb-3">+ Pekerjaan yang dilamar</a>
</div>
@foreach($jobs as $e)

<div class="card mb-2">
    <div class="card-body">
        <h4 class="card-title">Melamar untuk bagian {{ $e->job_name}}</h4>

        <ul>
            <li>Posisi yang diinginkan: {{ $e->job_position}}</li>
            <li>Gaji yang diharapkan: {{ $e->job_salary}}</li>
            <li>Fasilitas yang diharapkan: {{$e->job_facilities}}</li>
            <li>Dapat mulai bekerja: {{$e->job_starts}}</li>

        </ul>

    <a  class="btn btn-sm btn-primary" href=" {{route('job.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('job.destroy', $e)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>


@endforeach


<div class="text-right">
    <a class=" btn btn-primary mt-3" href=" {{route('connection.index')}} " role="button">Next</a>
</div>


@endsection
