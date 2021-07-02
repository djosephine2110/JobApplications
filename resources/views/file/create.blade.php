@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Upload CV</h2>


    <form action="/file" method='POST' enctype="multipart/form-data">
        @csrf

        <input type="file" name='file' placeholder=''>

     
<br>
        
        <input type="submit" class="btn btn-primary mt-3" value="Submit" style="margin-left: 50%; margin-right:50%;">

    </form>

</div>


@endsection
