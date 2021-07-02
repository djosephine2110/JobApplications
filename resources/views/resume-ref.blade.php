<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Resume</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            font-size: 17px;

        }

        h2 {
            font-weight: 100;
            padding: 20px 0;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        .container {
            width: 70%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <img src="{{asset('/images/' . $user->images->image)}}" alt="" class="img-thumbnail rounded mx-auto d-block" style="max-width: 200px;" >
        <br>
        <section class="heading">
            @foreach($user->details as $e)
            <h2 class="text-center"><b>Application of {{$e->name}}</b></h2>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Name:</label> {{$e->name}}
                </div>
                <div class="form-group col-md-6">
                  <label for="ktp">KTP:</label> {{$e->ktp}}
                </div>
              </div>
        
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="birth_place">Tempat Lahir: </label>{{$e->birth_place}}
                </div>
                <div class="form-group col-md-6">
                  <label for="dob">Tanggal Lahir: </label> {{$e->dob}}
                </div>
              </div>
        
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="gender">Jenis Kelamin :</label> {{$e->gender}}
                  <br>
                  
                  
                </div>
                <div class="form-group col-md-6">
                  <label for="religion">Agama: </label> {{$e->religion}}
                               
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="address">Alamat: </label> {{$e->address}}
                </div>
                <div class="form-group col-md-6">
                  <label for="zipcode">Kode Pos: </label> {{$e->zipcode}}
                </div>
              </div>
        
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="phone">Nomor Telepon: </label> {{$e->phone}}
                </div>
                <div class="form-group col-md-6">
                  <label for="home_number">Telepon Rumah: </label> {{$e->home_number}}
                </div>
              </div>
        
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="sim_a">SIM A: </label> {{$e->sim_a}}
                </div>
                <div class="form-group col-md-6">
                  <label for="sim_c">SIM C: </label> {{$e->sim_c}}
                </div>
              </div>
            
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="vehicle">Kendaraan: </label> {{$e->vehicle}}
                 
                </div>
                <div class="form-group col-md-6">
                  <label for="hobby">Hobi: </label> {{$e->hobby}}
                </div>
              </div>


            


@endforeach

        </section>


        <section class="education">

            <h2><b>Pendidikan</b></h2>

            @foreach($user->education as $e)

            <h4> Degree: {{$e->degree}}</h4>

            <p>Nama Institusi: {{$e->school_name}} </p>
            <p>Alamat: {{$e->school_location}}</p>
            <p>Jurusan:  {{$e->field_of_study}}</p>
            <p>Start Date: {{$e->graduation_start_date}} </p>
            <p>Graduation Date: {{$e->graduation_end_date}} </p>
            <br>
            @endforeach
        </section>


        <section class="work">

            <h2>Pengalaman Kerja</h2>

            @foreach($user->experiences as $work)
            <h3>
                Job Title: {{$work->job_title}}
            </h3>
            <p>Employer: {{$work->employer}} </p>
            <p>Start Date: {{$work->start_date}} </p>
            <p>End Date: {{$work->end_date}} </p>
            @endforeach
        </section>



        <section class="skills">

            <h2>Skills</h2>

            @foreach($user->skills as $skill)
            <h4> {{$skill->name}} ({{$skill->rating}} out of 5)</h4>
            @endforeach
        </section>

    </div>
</body>

</html>
