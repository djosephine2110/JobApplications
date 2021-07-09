@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ERA CAREER</div>
                <div class="card-body">
                    <h2>Hi {{Auth::user()->name}},</h2>
                    <p>Tolong upload gambar profile anda untuk melanjutkan ke proses selanjutnya, atau jika sudah memiliki gambar profile anda bisa melanjutkan ke halaman selanjutnya. Jika tidak meng-upload CV anda, maka aplikasi anda dianggap belum lengkap.</p>
                </div>
                <div class="card-body">
                    <form action="{{route('home')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for=""><b>Unduh Gambar Profile</b></label><br>
                        <input type="file" name="image" class="mb-3" onchange="loadPreview(this);" id="profile_image">
                        <img id="preview_img" src="{{asset('/storage/images/'.Auth::user()->image)}}" class="img-thumbnail" style="max-width: 250px;" />

                        <br>
                        <label for=""><b>Unduh CV</b></label><br>
                        <input type="file" name="file" class="mb-3">
                        <br>
                        <input type="submit" value="Submit" class="btn btn-primary mt-3" >
                        <a class=" btn btn-primary mt-3" href="/user-detail " role="button" style="float:right;">Next</a>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function loadPreview(input, id) {
      id = id || '#preview_img';
      if (input.files && input.files[0]) {
          var reader = new FileReader();
   
          reader.onload = function (e) {
              $(id)
                      .attr('src', e.target.result, '.img-thumbnail')
                      .width(200)
                      .height(150);
          };
   
          reader.readAsDataURL(input.files[0]);
      }
   }
  </script>
@endsection