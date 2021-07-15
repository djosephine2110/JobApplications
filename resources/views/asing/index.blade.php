@extends('layouts.app')

@section('content')

<h2>Bahasa Asing</h2>
<div class="mt-2">
    <a href=" {{route('asing.create')}} " class="btn btn-primary mb-3">+ Bahasa Asing</a>
</div>
@foreach($asings as $e)

<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.788);">
    <div class="card-body">
        <h4 class="card-title"> {{$e->language}}  </h4>

        <ul>
            <li>Bicara: {{ $e->speaking}}</li>
            <li>Membaca: {{ $e->reading}}</li>
            <li>Menulis: {{ $e->writing}}</li>
        </ul>

    <a  class="btn btn-sm btn-primary" href=" {{route('asing.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('asing.destroy', $e)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>


@endforeach


<div class="text-right">
    <a class=" btn btn-primary mt-3" href=" {{route('reference.index')}} " role="button">Next</a>
</div>


@endsection
