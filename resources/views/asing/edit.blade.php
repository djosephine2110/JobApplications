@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Work Detail</h2>

    <form action="{{route('asing.update', $asing)}}" method='POST'>
        @csrf
        @method('PUT')

    <input type="text" name='language' placeholder='Job Title' value="{{$asing->language}}">

        <input type="text" name='reading' placeholder='reading' value="{{$asing->reading}}">

        <input type="text" name='writing' placeholder='writing' value="{{$asing->writing}}">

        <input type="text" name='speaking' placeholder='speaking' value="{{$asing->speaking}}">

       
        <input type="submit" value="Save">

    </form>

</div>


@endsection
