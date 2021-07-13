@extends('layouts.adm')

@section('content')

<div class="container">
    <h2>Job Posts</h2>

    <div class="mt-2">
        <a href=" {{route('post.create')}} " class="btn btn-primary mb-3">+ Job Post</a>
    </div>
    @foreach($posts as $e)
    
    <div class="card mb-2" style="background-color:rgba(255, 255, 255, 0.507);">
        <div class="card-body">
            <h4 class="card-title"> {{$e->title}} </h4>
    
            <ul>
                <li>Date Created: {{ $e->created_at}}</li>
                <li>Status:  @if($e->status == 1)
                    Post
                    @else
                    On Hold
                    @endif</li>
            </ul>
    
        <a  class="btn btn-sm btn-primary" href=" {{route('post.edit', $e)}} " role="button">Edit</a>
    
            <form action="{{route('post.destroy', $e)}}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
    
            <input type="submit" value="Delete" class="btn btn-sm btn-danger">
            </form>
    
        </div>
    </div>
    
    
    @endforeach
    
    
    <div class="text-right">
        <a class=" btn btn-primary mt-3" href=" {{route('skill.index')}} " role="button">Next</a>
    </div>
    
</div>


@endsection
