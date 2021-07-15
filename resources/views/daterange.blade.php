<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
 </head>
 <style>
     
 </style>
 <body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class = "sr-only">Toggle navigation</span>
                    <span class = "glyphicon glyphicon-tint white"></span>
                </button>
                <a class="navbar-brand" href="home">Erakomp Career </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Dashboard</a></li>
                    <li><a href="projects">Add Job Post</a></li>
                    <li><a href="resume">Job List</a></li>
                    <li class="sidebar-item">
                        <a  href="{{ route('logout') }}" class='sidebar-link'  onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i data-feather="home" width="20"></i>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </li>
                </ul>
            </div>
      </div>
  </nav>
  <div class="container">    
     <br />
     <br />
            <br />
            <div class="row input-daterange">
                <div class="col-md-4">
                    <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" readonly />
                </div>
                <div class="col-md-4">
                    <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" readonly />
                </div>
                <div class="col-md-4">
                    <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
                    <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>
                </div>
            </div>
            <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped" id="order_table">
           <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>CV</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
           </thead>
       </table>
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format:'yyyy-mm-dd',
  autoclose:true
 });

 load_data();

 function load_data(from_date = '', to_date = '')
 {
  $('#order_table').DataTable({
   processing: true,
   serverSide: true,
   ajax: {
    url:'{{ route("daterange.index") }}',
    data:{from_date:from_date, to_date:to_date}
   },
   columns: [
    {
     data:'image',
     name:'image',
     render: function (data, type, row) { return '<img class="image img-thumbnail" src="/storage/images/'+ data + '" alt="profile_image" style="max-width:100px;">'; }

    },
    {
     data:'name',
     name:'name'
    },
    {
     data:'email',
     name:'email'
    },
    {
     data:'id',
     name:'id',
     render: function (data, type, row) { return '<a href="books/download/' + data +'" >' + 'Download CV' + '</a>'; }

    },
    {
     data:'status',
     name:'status'
    },
    {
     data:'id',
     name:'id',
     render: function (data, type, row) { return '<a href="/users/' + data + '/edit" class="btn btn-primary">' + 'Edit' + '</a> <a href="users/images/download/' + data + '" class="btn btn-warning">' + 'Download Image' + '</a>'; }
    }
   ]
  });
 }

 $('#filter').click(function(){
  var from_date = $('#from_date').val();
  var to_date = $('#to_date').val();
  if(from_date != '' &&  to_date != '')
  {
   $('#order_table').DataTable().destroy();
   load_data(from_date, to_date);
  }
  else
  {
   alert('Both Date is required');
  }
 });

 $('#refresh').click(function(){
  $('#from_date').val('');
  $('#to_date').val('');
  $('#order_table').DataTable().destroy();
  load_data();
 });
 

});
</script>
<script>
    $(function () {
    "use strict";
    
    $(".image img").click(function () {
        var $src = $(this).attr("src");
        $(".show").fadeIn();
        $(".img-show img").attr("src", $src);
    });
    
    $("span, .overlay").click(function () {
        $(".show").fadeOut();
    });
    
});
</script>
