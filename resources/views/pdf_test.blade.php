<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
  <div class="container ">
    <div class="card shadow">
      <div class="card-body ">
       <div class="container">
        <section class="heading">
          @foreach($images as $e)
          <img src="{{asset('/images/' . $e->image)}}" alt="" class="img-thumbnail d-flex justify-content-right" style="max-width: 200px; float:right; margin-top:10%;" >
          @endforeach
          @foreach($userDetail as $e)
          <h2 class="text-center"><b>Application of {{$e->name}}</b></h2>
      
          <p><b>Nama Lengkap:</b> {{$e->name}} </p>
          <p><b>KTP:</b> {{$e->ktp}}</p>
          <p><b>Tempat Lahir: </b> {{$e->birth_place}}</p>
          <p><b>Tanggal Lahir:</b> {{$e->dob}} </p>
          <p><b>Jenis Kelamin:</b> {{$e->gender}} </p>
          <p><b>Agama:</b> {{$e->religion}}</p>
          <p><b>Alamat:</b> {{$e->address}}</p>
          <p><b>Kode Pos:</b> {{$e->zipcode}}</p>
          <p><b>Telepon 1:</b> {{$e->phone}}</p>
          <p><b>Telepon 2:</b> {{$e->home_number}}</p>
          <p><b>SIM A:</b> {{$e->sim_a}}</p>
          <p><b>SIM C:</b> {{$e->sim_c}}</p>
          <p><b>Kendaraan:</b> {{$e->vehicle}}</p>
          <p><b>Kegemaran:</b> {{$e->hobby}}</p>
      
          <br>
          @endforeach
      
      </section>
     
      <section class="education">
      
        <h2><b>Pendidikan</b></h2>
      
        @foreach($educations as $e)
      
        <p style="font-size: 15px;"><b>{{$e->degree}} ({{$e->graduation_start_date}} - {{$e->graduation_end_date}})</b></p>
      
        <p><b>Nama Institusi: </b>{{$e->school_name}} </p>
        <p><b>Alamat: </b>{{$e->school_location}}</p>
        <p><b>Jurusan:  </b>{{$e->field_of_study}}</p>
        
        <br>
        @endforeach
      </section>
      
      <section class="foreign">
      
        <h2><b>Bahasa Asing</b></h2>
      
        @foreach($asings as $e)
      
        <p style="font-size: 15px;"><b>{{$e->language}}</b></p>
      
        <p><b>Bicara: </b>{{$e->speaking}} </p>
        <p><b>Membaca: </b>{{$e->reading}}</p>
        <p><b>Menulis:  </b>{{$e->writing}}</p>
        
        <br>
        @endforeach
      </section>
      
      
      <section class="skills">
      
        <h2><b>Keahlian Lainnya</b></h2>
      
        @foreach($skills as $skill)
        <p style="font-size: 15px;"> <b>{{$skill->name}}</b></p>
        <p><b>Penilaian: </b>{{$skill->rating}}</p>
        @endforeach
      </section>
      
        <section class="work">
      
            <h2><b>Pengalaman Kerja</b></h2>
      
            @foreach($experiences as $work)
            <p style="font-size: 15px;"><b>
                {{$work->company_name}} ({{$work->from}} - {{$work->to}})
            </b></p>
            <p><b>Jabatan: </b>{{$work->position}} </p>
            <p><b>Gaji: </b>{{$work->salary}} </p>
            <p><b>Alasan Keluar: </b>{{$work->reason}} </p>
            <p><b>Deskripsi Pekerjaan: </b>{{$work->description}}</p>
            @endforeach
        </section>
      
        <section class="Nikah">
      
          <h2><b>Status Pernikahan</b></h2>
      
          @foreach($marrieds as $m)
          
          <p><b>Status: </b>{{$m->married_status}} </p>
          <p><b>Nama Pasangan: </b>{{$m->spouse_name ?? 'tidak ada'}}  </p>
          <p><b>Tempat Lahir: </b>{{$m->spouse_bplace ?? 'tidak ada'}} </p>
          <p><b>Tanggal Lahir: </b>{{$m->spouse_dob ?? 'tidak ada'}}</p>
          <p><b>Pendidikan: </b>{{$m->spouse_education ?? 'tidak ada'}}</p>
          <p><b>Pekerjaan: </b>{{$m->spouse_job ?? 'tidak ada'}}</p>
      
          @endforeach
      </section>
      
      <section class="Anak">
      
        <h2><b>Anak</b></h2>
      
        @foreach($anaks as $m)
        
        <p><b>Nama Anak: </b>{{$m->name}} </p>
        <p><b>Jenis Kelamin: </b>{{$m->gender ?? 'tidak ada'}}  </p>
        <p><b>Tanggal Lahir: </b>{{$m->dob ?? 'tidak ada'}} </p>
        <p><b>Pendidikan: </b>{{$m->education ?? 'tidak ada'}}</p>
        
      
        @endforeach
      </section>
        
      
      <section class="Relasi">
      
        <h2><b>Relasi</b></h2>
      
        @foreach($relations as $m)
        
        <p><b>Nama:</b> {{$m->name}} </p>
        <p><b>Hubungan:</b> {{$m->relationship ?? 'tidak ada'}}  </p>
        <p><b>Tanggal Lahir:</b> {{$m->dob ?? 'tidak ada'}} </p>
        <p><b>Pekerjaan:</b> {{$m->job ?? 'tidak ada'}}</p>
        
      
        @endforeach
      </section>
        
      
      <section class="Organisasi">
      
        <h2><b>Organisasi</b></h2>
      
        @foreach($organizations as $m)
        
        <p style="font-size: 15px;"><b>{{$m->name}} ({{$m->from}} - {{$m->to}})</b></p>
        <p><b>Alamat: </b>{{$m->address ?? 'tidak ada'}}  </p>
        <p><b>Jabatan: </b>{{$m->position ?? 'tidak ada'}} </p>
        <br>
        
      
        @endforeach
      </section>
      
      <section class="Data Kesehatan">
      
        
      
        @foreach($healths as $m)
        
        <p><b>Golongan Darah: </b>{{$m->blood_type ?? 'tidak ada'}}  </p>
        <p><b>Penyakit Ringan: </b>{{$m->light_disease ?? 'tidak ada'}} </p>
        <p><b>Penyakit Berat: </b>{{$m->heavy_disease ?? 'tidak ada'}} </p>
        <p><b>Pernah Dirawat: </b>{{$m->opname ?? 'tidak ada'}} </p>
        <p><b>Alasan Dirawat: </b>{{$m->alasan ?? 'tidak ada'}} </p>
        <p><b>Pengelihatan: </b>{{$m->eyesight ?? 'tidak ada'}} </p>
        <p><b>Pendengaran: </b>{{$m->hearing ?? 'tidak ada'}} </p>
        <p><b>Kesehatan: </b>{{$m->health ?? 'tidak ada'}} </p>
        <hr>
        <p>Kontak Darurat</p>
        <p><b>Nama: </b>{{$m->name ?? 'tidak ada'}} </p>
        <p><b>Alamat: </b>{{$m->address ?? 'tidak ada'}} </p>
        <p><b>Kode Pos: </b>{{$m->zipcode ?? 'tidak ada'}} </p>
        <p><b>Nomor Telepon: </b>{{$m->phone ?? 'tidak ada'}} </p>
        <p><b>Hubungan: </b>{{$m->relation ?? 'tidak ada'}} </p>
      
        <br>
        
      
        @endforeach
      </section>
      <section class="Referensi">
      
        <h2><b>Referensi</b></h2>
      
        @foreach($references as $m)
        
        <p style="font-size: 15px;"><b>{{$m->name}}</b></p>
        <p><b>Alamat: </b>{{$m->address ?? 'tidak ada'}}  </p>
        <p><b>Nomor Telepon: </b>{{$m->phone ?? 'tidak ada'}}</p>
        <p><b>Jabatan: </b>{{$m->position ?? 'tidak ada'}} </p>
        <br>
        
      
        @endforeach
      </section>
      
      <section class="Connection">
      
        <h2><b>Rekomendasi Dari Perusahaan</b></h2>
      
        @foreach($connections as $m)
        
        <p style="font-size: 15px;"><b>{{$m->name}}</b></p>
        <p><b>Jabatan: </b>{{$m->position ?? 'tidak ada'}} </p>
        <p><b>Hubungan: </b>{{$m->relationship ?? 'tidak ada'}}</p>
        <br>
        
      
        @endforeach
      </section>
      
      <section class="Connection">
      
        <h2><b>Informasi Pekerjaan Yang Dilamar</b></h2>
      
        @foreach($jobs as $m)
        
        <p style="font-size: 15px;"><b>{{$m->job_name}}</b></p>
        <p><b>Jabatan yang diinginkan: </b>{{$m->job_position ?? 'tidak ada'}} </p>
        <p><b>Gaji yang diharapkan: </b>{{$m->job_salary ?? 'tidak ada'}}</p>
        <p><b>Fasilitas yang diharapkan: </b>{{$m->job_facilities ?? 'tidak ada'}}</p>
        <p><b>Kapan dapat mulai bekerja: </b>{{$m->job_starts ?? 'tidak ada'}}</p>
      
        <br>
        
      
        @endforeach
      </section>
       </div>
        
      </div>
    </div>
   
  
  </div>
  
</body>
</html>


