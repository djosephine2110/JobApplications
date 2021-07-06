@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ERA CAREER</div>
                <div class="card-body">
                    <h2>Hi {{Auth::user()->name}},</h2>
                    <p>Tolong upload gambar profile anda untuk melanjutkan ke proses selanjutnya, atau jika sudah memiliki gambar profile anda bisa melanjutkan ke halaman selanjutnya.</p>
                </div>
                <div class="card-body">
                    <form action="{{route('home')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image" class="mb-3">
                        <br>
                        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:50%; margin-right:50%;">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection