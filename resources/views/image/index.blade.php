@extends('layouts.app')

@section('content')

<h2>Profile Picture</h2>


        
    

    
<div class="mt-2">
    <a href=" {{route('image.create')}} ">+ Profile Picture</a>
</div>


<div class="text-right">
    <a class=" btn btn-primary" href=" {{route('skill.index')}} " role="button">Next</a>
</div>


@endsection
