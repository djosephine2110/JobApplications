@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit</h2>

    <form action="{{route('children.update', $children)}}" method='POST'>
        @csrf
        @method('PUT')

    <input type="text" name='name' placeholder='Job Title' value="{{$children->name}}">

        <input type="text" name='gender' placeholder='Employer' value="{{$children->gender}}">

        <input type="text" name='dob' placeholder='City' value="{{$children->dob}}">

        <input type="text" name='education' placeholder='State' value="{{$children->education}}">

        

        <input type="submit" value="Save">

    </form>

</div>


@endsection
