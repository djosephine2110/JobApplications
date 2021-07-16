@extends('layouts.adm')

@section('content')
<div class="container mt-5">
<h2>Job Posting</h2>

@foreach($posting as $e)

<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.507);">
    <div class="card-body">
        <h4 class="card-title"> {{$e->title}}  </h4>

        <ul>
            <li>Created at: {{ $e->created_at->format('l, d-m-Y')}}</li>
            <li>Status: {{$e->status}}</li>
        </ul>

    <a  class="btn btn-sm btn-primary" href=" {{route('posting.edit', $e)}} " role="button">Edit Status</a>

       <!-- <form action="{{route('posting.destroy', $e)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>-->

    </div>
</div>


@endforeach




</div>


@endsection
