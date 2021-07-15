<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">    
     <br />
     <br />
            <br />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select name="filter_gender" id="filter_gender" class="form-control" required>
                            <option value="">Select Category</option>
                            <option value="IT">IT</option>
                            <option value="Finance">Finance</option>
                        </select>
                    </div>
                    
                    
                    <div class="form-group" align="center">
                        <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>

                        <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br />
   <div class="table-responsive">
    <table id="customer_data" class="table table-bordered table-striped">
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
            <br />
            <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

    fill_datatable();

    function fill_datatable(filter_gender = '', filter_country = '')
    {
        var dataTable = $('#customer_data').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: "{{ route('customsearch.index') }}",
                data:{filter_gender:filter_gender, filter_country:filter_country}
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
        var filter_gender = $('#filter_gender').val();
        var filter_country = $('#filter_country').val();

        if(filter_gender != '' &&  filter_gender != '')
        {
            $('#customer_data').DataTable().destroy();
            fill_datatable(filter_gender, filter_country);
        }
        else
        {
            alert('Select Both filter option');
        }
    });

    $('#reset').click(function(){
        $('#filter_gender').val('');
        $('#filter_country').val('');
        $('#customer_data').DataTable().destroy();
        fill_datatable();
    });

});
</script>