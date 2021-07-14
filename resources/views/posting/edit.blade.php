@extends('layouts.adm')

@section('content')
<div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.507);">
  <div class="card-body">
<div class="container">
    <h2>Edit Job Post</h2>

    <form action="{{route('posting.update', $posting)}}" method='POST'>
        @csrf
        @method('PUT')

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="title">Job Title</label>
            <input type="text" class="form-control" name="title" id="name" value={{$posting->title}}>
          </div>
          <div class="form-group col-md-6">
            <label for="description">Job Description</label>
            <textarea type="text" class="form-control" name="description" id="position" value="{{$posting->description}}">{{$posting->description}}</textarea>
          </div>
        </div>
  
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="education">Education</label>
            <input type="text" class="form-control" name="education" id="name" value={{$posting->education}}>
          </div>
          <div class="form-group col-md-6">
            <label for="experience">Experiences</label>
            <input type="text" class="form-control" name="experience" id="position" value={{$posting->experience}}>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Category</label>
            <select id="inputState" name="category" class="form-control">
              <option value="{{$posting->category}}" selected>{{$posting->category}}</option>
              <option value="IT">IT</option>
              <option value="HRD">HRD</option>
              <option value="Finance">Finance</option>
              <option value="Product">Product</option>
              <option value="Sales">Sales</option>
              <option value="Legal">Legal</option>
              <option value="Others">Others</option>
              <option value="Social Media">Social Media</option>

            </select>          
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Status</label>
            <select id="inputState" name="status" class="form-control">
              <option value="{{$posting->status}}" selected>{{$posting->status}}</option>
              <option value="On Hold">On Hold</option>
              <option value="Post">Post</option>

            </select>          
          </div>
          
        </div>

        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>
  </div>
</div>

@endsection
