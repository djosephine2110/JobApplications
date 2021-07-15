@extends('layouts.app')

@section('content')

<h2>Organisasi</h2>
<div class="mt-2">
    <a href=" {{route('organization.create')}} " class="btn btn-primary mb-3">+ Organisasi</a>
</div>
@foreach($organizations as $e)

<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
    <div class="card-body">
        <h4 class="card-title"> {{$e->name}}  ({{$e->from}} to {{$e->to}}) </h4>

        <ul>
            <li>{{ $e->address}}</li>
            <li>{{ $e->position}}</li>
        </ul>

    <a  class="btn btn-sm btn-primary" href=" {{route('organization.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('organization.destroy', $e)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>


@endforeach


<div class="text-right">
    <a class=" btn btn-primary mt-3" href=" {{route('health.create')}} " role="button">Next</a>
</div>


@endsection
