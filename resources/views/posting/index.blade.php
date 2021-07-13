@extends('layouts.adm')

@section('content')
<div class="container mt-5">
<h2>Job Posting</h2>
<div class="mt-2">
    <a href=" {{route('posting.create')}} " class="btn btn-primary mb-3">+ Job Post</a>
</div>
@foreach($postings as $e)

<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.507);">
    <div class="card-body">
        <h4 class="card-title"> {{$e->title}}  </h4>

        <ul>
            <li>Nama Perusahaan: {{ $e->company_name}}</li>
            <li>Gaji Pokok: {{ $e->salary}}</li>
            <li>Alasan Keluar: {{ $e->reason}}</li>
            <li>Deskripsi Pekerjaan: {{$e->description}}</li>
        </ul>

    <a  class="btn btn-sm btn-primary" href=" {{route('posting.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('posting.destroy', $e)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>


@endforeach




</div>


@endsection
