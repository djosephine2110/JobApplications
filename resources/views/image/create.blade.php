@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Profile Picture</h2>


    <form action="/image" method='POST' enctype="multipart/form-data">
        @csrf

        <input type="file" name='image' placeholder='Image'>

     
<br>
        
        <input type="submit" class="btn btn-primary mt-3" value="Submit" style="margin-left: 50%; margin-right:50%;">

    </form>

</div>


@endsection
