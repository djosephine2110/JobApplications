@extends('layouts.app')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.507);">
    <div class="card-body">
<div class="container">
    <h2>Gambar Profile</h2>


    <form action="/image" method='POST' enctype="multipart/form-data">
        @csrf

        <input type="file" name='image' placeholder='Image'>

     
<br>
        
        <input type="submit" class="btn btn-primary mt-3" value="Submit" style="margin-left: 50%; margin-right:50%;">

    </form>

</div>
    </div>
</div>

@endsection
