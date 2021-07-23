@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color:rgba(255, 255, 255, 0.788);">
                <div class="card-header">ERA CAREER</div>
                <div class="card-body">
                    <h2>Hi {{Auth::user()->name}},</h2>
                    <p>Terima kasih telah menyelesaikan tahap pertama, silahkan klik 'next' untuk kehalaman selanjutnya.</p>
                </div>
                <div class="card-body">
                    
                        <a class=" btn btn-primary mt-3" href="/user-detail " role="button" style="float:right;">Next</a>

                   

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