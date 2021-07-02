@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Work Detail</h2>

    <form action="{{route('image.update', $image)}}" method='POST'>
        @csrf
        @method('PUT')

    <input type="file" name='image' placeholder='Job Title' value="{{$image->image}}">

      

        <input type="submit" value="Save">

    </form>

</div>


@endsection
