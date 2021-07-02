@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Work details</h2>


    <form action="/children" method='POST'>
        @csrf

        <input type="text" name='name' placeholder='Nama Anak'>

        <input type="text" name='gender' placeholder='Jenis Kelamin'>

        <input type="date" name='dob' placeholder=''>

        <input type="text" name='education' placeholder='Pendidikan'>

        

        <input type="submit" value="Save">

    </form>

</div>


@endsection
