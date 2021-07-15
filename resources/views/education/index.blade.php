@extends('layouts.app')

@section('content')

<div class="mb-2">

<h2>Pendidikan</h2>

<a  href=" {{route('education.create')}} " class="btn btn-primary mb-3" role="button">+ Pendidikan</a>

@foreach($education as $e)

<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
    <div class="card-body">
        <h4 class="card-title"> {{$e->degree}} {{$e->school_name}} ({{$e->graduation_start_date}} -
            {{$e->graduation_end_date}})</h4>

        <a class="btn btn-sm btn-primary" href=" {{route('education.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('education.destroy', $e)}}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')

            <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>
@endforeach

</div>

<div class="row mt-3">
    <div class="col text-left">
        <a class="btn btn-secondary" href=" {{route('education.create')}} " role="button">Back</a>
    </div>

    <div class="col text-right">
        <a class=" btn btn-primary" href=" {{route('experience.index')}} " role="button">Next</a>
    </div>
</div>




@endsection
