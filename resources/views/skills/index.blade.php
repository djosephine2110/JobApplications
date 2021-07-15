@extends('layouts.app')

@section('content')

<h2>Keahlian</h2>
<div class="mt-2">
    <a href=" {{route('skill.create')}} " class="btn btn-primary">+ Keahlian</a>
</div>
<br>

@foreach($skills as $e)

<div class="card" style="background-color:rgba(255, 255, 255, 0.788);">
    <div class="card-body">
        <h4 class="card-title"> {{$e->name}} ( {{$e->rating}} )</h4>


    <a  class="btn btn-sm btn-primary" href=" {{route('skill.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('skill.destroy', $e)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>
<br>

@endforeach




<div class="text-right">
    <a class=" btn btn-primary" href=" {{route('asing.index')}} " role="button">Next</a>
</div>


@endsection
