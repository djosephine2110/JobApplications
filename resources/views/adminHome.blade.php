@extends('layouts.adm')
@section('content')
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    #customer_data {
        width:1100px !important;
        margin-left: 23%;
    }
    div.dataTables_wrapper div.dataTables_info{
        padding-left: 50% !important;
    }
    div.dataTables_wrapper div.dataTables_paginate {
        padding-right: 5%;
    }
    div.dataTables_wrapper div.dataTables_filter{
        padding-right: 10%;
    }
    div.dataTables_wrapper div.dataTables_length{
        padding-left: 50%;
    }
    .sidebar-wrapper .menu .sidebar-title {
        font-size: 15px;
    }
    .sidebar-wrapper .menu .sidebar-link {
        font-size: 13px;
    }
    @media (min-width: 1200px){}
.container, .container-lg, .container-md, .container-sm, .container-xl {
max-width:950px;

}
}
div.table-responsive>div.dataTables_wrapper>div.row>div[class^="col-"]:last-child {
    padding-right: 15% !important;
}
</style>
<body>
    <div class="">    
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
                            <option value="Product">Product</option>
                            <option value="Legal">Legal</option>
                            <option value="Social Media">Social Media</option>
                            <option value="Sales">Sales</option>
                            <option value="Others">Finance</option>

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
                            <th>Category</th>

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
    render: function (data, type, row) { return '<a href="/testdetaill/' + data +'" >' + 'Download CV' + '</a>'; }

    },
    {
    data:'status',
    name:'status'
    },
    {
    data:'category',
    name:'category'
    },
    {
    data:'id',
    name:'id',
    render: function (data, type, row) { return '<a href="/users/' + data + '/edit" class="btn btn-primary">' + '<i class="fas fa-pen"></i>' + '</a> <a href="users/images/download/' + data + '" class="btn btn-warning ">' + '<i class="fas fa-upload"></i>' + '</a> <a href="users/books/download/' + data + '" class="btn btn-primary">' + '<i class="fas fa-file-upload"></i>' + '</a> <a href="/test_detail/' + data +'" class="btn btn-primary" >' + '<i class="fas fa-eye"></i>' + '</a>'; }
    },
    
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
@endsection