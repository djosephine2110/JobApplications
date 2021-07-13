@extends('layouts.adm')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.507);">
  <div class="card-body">
<div class="container">
    <h2>Job Posts</h2>


    <form action="/post" method='POST'>
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="title">Job Title</label>
              <input type="text" class="form-control" name="title" id="name" placeholder="" value="{{$post->title}}">
            </div>
            <div class="form-group col-md-6">
              <label for="description">Job Description</label>
              <textarea type="text" class="form-control" name="description" id="position" value="{{$post->description}}">{{$post->description}}</textarea>
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="education">Education</label>
              <input type="text" class="form-control" name="education" id="name" value="{{$post->education}}">
            </div>
            <div class="form-group col-md-6">
              <label for="post">Experiences</label>
              <input type="text" class="form-control" name="experience" id="position" value="{{$post->experience}}">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Status</label>
              <select id="inputState" name="status" class="form-control">
                <option value="{{$post->status}}" selected>
                  @if($post->status == 1)
                  Post
                  @else
                  On Hold
                  @endif
                </option>
                <option value="0">On Hold</option>
                <option value="1">Post</option>
  
              </select>          
            </div>
            
          </div>


        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>

  </div>
</div>
@endsection
