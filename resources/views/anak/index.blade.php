@extends('layouts.app')

@section('content')

<h2>Anak (jika ada)</h2>
<div class="mt-2">
    <a href=" {{route('anak.create')}} " class="btn btn-primary mb-3">+ Anak</a>
</div>
@foreach($anaks as $e)

<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
    <div class="card-body">
        <h4 class="card-title"> {{$e->name}}  </h4>

        <ul>
            <li>{{ $e->gender}}</li>
            <li>{{ $e->dob}}</li>
            <li>{{ $e->education}}</li>
        </ul>

    <a  class="btn btn-sm btn-primary" href=" {{route('anak.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('anak.destroy', $e)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>


@endforeach


<div class="row mt-3">
    <div class="col text-left">
        <a class="btn btn-secondary" href=" {{route('married.index')}} " role="button">Back</a>
    </div>

    <div class="col text-right">
        <a class=" btn btn-primary" href=" {{route('relation.index')}} " role="button">Next</a>
    </div>
</div>


@endsection
