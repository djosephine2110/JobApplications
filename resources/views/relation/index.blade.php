@extends('layouts.app')

@section('content')

<h2>Relasi</h2>
<div class="mt-2">
    <a href=" {{route('relation.create')}} " class="btn btn-primary mb-3">+ Relasi</a>
</div>
@foreach($relations as $e)

<div class="card mb-2">
    <div class="card-body">
        <h4 class="card-title"> {{$e->name}}  </h4>

        <ul>
            <li>Hubungan: {{ $e->relationship}}</li>
            <li>Tanggal Lahir: {{ $e->dob}}</li>
            <li>Pekerjaan: {{ $e->job}}</li>
        </ul>

    <a  class="btn btn-sm btn-primary" href=" {{route('relation.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('relation.destroy', $e)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>


@endforeach


<div class="text-right">
    <a class=" btn btn-primary mt-3" href=" {{route('organization.index')}} " role="button">Next</a>
</div>


@endsection
