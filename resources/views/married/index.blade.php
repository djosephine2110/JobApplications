@extends('layouts.app')

@section('content')

<h2>Status</h2>
<div class="mt-2">
</div>
@forelse($marrieds as $e)

<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
    <div class="card-body">
        <h4 class="card-title"> {{$e->married_status}}  </h4>

        <ul>
            <li>Nama Pasangan: {{ $e->spouse_name}}</li>
            <li>Tempat Lahir: {{ $e->spouse_bplace}}</li>
            <li>Tanggal Lahir: {{ $e->spouse_dob}}</li>
            <li>Pendidikan: {{$e->spouse_education}}</li>
            <li>Pekerjaan: {{$e->spouse_job}}</li>
        </ul>

    <a  class="btn btn-sm btn-primary" href=" {{route('married.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('married.destroy', $e)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>

@empty
<div class="mt-2">
  <a href=" {{route('married.create')}} " class="btn btn-primary mb-3">+ Status</a>
</div>

@endforelse


<div class="text-right">
    <a class=" btn btn-primary mt-3" href=" {{route('children.index')}} " role="button">Next</a>
</div>


@endsection
