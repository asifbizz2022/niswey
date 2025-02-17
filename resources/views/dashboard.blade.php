@extends('layout.app')
@section('title')
Dashboard
@endsection
@section('content')

@if(Auth::guard('web')->user()->user_type == 1)
1
@else
2
@endif

<div class=" ">
        <div class="row">
            <div class="col">
               <a href="{{ route('vendors') }}" class=" ">
                    <div class="card mini-stats-wid p-2 align-middle py-5"  >
                    <div class="card-body text-center">  
                        <div class=" "> 
                            <div class="fw-bold mb-2 fs-4 text-uppercase align-middle">Vendors</div>
                            <div class="fs-3 intensity" > 
                                12345
                            </div>

                        </div>  
                    </div>
                    </div> 
               </a>
            </div>
            
             <div class="col">
               <a href="#" class=" ">
                    <div class="card mini-stats-wid p-2 align-middle py-5"  >
                    <div class="card-body text-center">  
                        <div class=" "> 
                            <div class="fw-bold mb-2 fs-4 text-uppercase align-middle">Subscription Plan</div>
                            <div class="fs-3 intensity" > 
                                12345
                            </div>

                        </div>  
                    </div>
                    </div> 
               </a>
            </div>

             <div class="col">
               <a href="#" class=" ">
                    <div class="card mini-stats-wid p-2 align-middle py-5"  >
                    <div class="card-body text-center">  
                        <div class=" "> 
                            <div class="fw-bold mb-2 fs-4 text-uppercase align-middle">Transaction</div>
                            <div class="fs-3 intensity" > 
                                12345
                            </div>

                        </div>  
                    </div>
                    </div> 
               </a>
            </div>

             <div class="col">
               <a href="#" class=" ">
                    <div class="card mini-stats-wid p-2 align-middle py-5"  >
                    <div class="card-body text-center">  
                        <div class=" "> 
                            <div class="fw-bold mb-2 fs-4 text-uppercase align-middle">Revenue</div>
                            <div class="fs-3 intensity" > 
                                12345
                            </div>

                        </div>  
                    </div>
                    </div> 
               </a>
            </div>
        
             
        </div> 
</div> 
<div class="row mb-3">
    <div class="col-6">
         <div id="chart_div" style="  height: 500px;"></div>
    </div>
    <div class="col-6">
        <div id="piechart_3d" style="  height: 500px;"></div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body"> 
                <h4 class="card-title"> </h4>  
                <table  class="table table-bordered dt-responsive nowrap w-100 table-sm ">
                    <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Gender</th>    
                        <th>Pan No</th> 
                        <th>Action</th>
                    </tr>
                    </thead>
                     
                </table>
            </div>
        </div>
    </div>
</div> 
@endsection
@section('js')            
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script type="text/javascript">
   $(document).ready(function() {
        var table = $('.table').DataTable({
            "ajax": {
                "url": "http://localhost/AdminFrame/api/seller", // Replace with your actual backend URL
                "type": "GET",
                "dataSrc": ""
            },
            "columns": [
                { "data": null, },
                {
                    "data": null, 
                    "render" : function(data, type, row){
                        row = '<img src="https://formonixcapital.com/storage/app/public/photos/1725292894.jpg"  width="100px" height="100px"/>';
                        return row;
                    }
                },
                { 
                    "data": null,
                    "render" : function(data , type,row){
                         
                        $row = '<div>'+data.name+'</div>';
                        $row += '<div>'+data.email+'</div>';
                        return $row;
                    }

                },
                { "data": "email" },
                { "data": "contact" },
                { "data": "status" },
                { 
                    "data": null,
                    "render" : function(data , type, row){
                        var gender;
                        if(row.gender == 'M')
                        {
                            gender = 'MALE';
                        }
                        else {
                            gender = 'FEMALE';
                        }
                        row = '<div>'+gender+'</div>';

                        return row;
                    }
                },
                { 
                    "data": null,
                    "render" : function(data ,type, row){
                        var pan;
                        if(data.pan_no == ''){
                            pan = '-----------';
                        }else {
                            pan = data.pan_no;
                        }

                        row = '<div>'+pan+'</div>';
                        return row;
                    }
                },
                {
                        "data": null,
                        "render": function(data, type, row) {
                           return `
                                <a href="javascript:void(0);" title="Edit" class="btn btn-outline-info btn-sm editBtn" data-id="${row.id}" ><i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0);" title="Delete" class="btn btn-outline-danger btn-sm deleteBtn" data-id="${row.id}"><i class="fa fa-trash"></i></a>
                                <a href="javascript:void(0);" title="Change Password" class="btn btn-outline-secondary btn-sm changePassword" data-id="${row.id}"><i class="fa fa-key"></i></a>
                                <a href="javascript:void(0);" title="View" class="btn btn-outline-success btn-sm viewBtn" data-id="${row.id}"><i class="fa fa-eye"></i></a>
                                <a href="javascript:void(0);" title="Sign In" class="btn btn-outline-dark btn-sm signIn" data-id="${row.id}"><i class="fas fa-sign-in-alt"></i></a>
                            `;
                            
                        }
                    }
            ],
            "columnDefs": [
                    {
                        "targets": 0, // The first column, for Serial Number
                        "render": function(data, type, row, meta) {
                            return meta.row + 1; // Increment serial number
                        }
                    }
                ],
             "dom": 'Blfrtip', // Layout control - B: Buttons, f: filtering input, r: processing, t: table, i: table info, p: pagination
                "buttons": [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
        });

        $(document).on('click', '.editBtn, .deleteBtn', function(){ 
            
            var id = $(this).data('id');
            var row = table.row($(this).parents('tr')).data();
            console.log(row , row.contact, row.name, row.adhar, row.pan, row.email, row.email);

        });
        $(document).on('click', '.editBtn, .deleteBtn', function(){ 
            
            var id = $(this).data('id');
            var row = table.row($(this).parents('tr')).data();
            console.log(row , row.contact, row.name, row.adhar, row.pan, row.email, row.email);

        });
        $(document).on('click', '.editBtn, .deleteBtn', function(){ 
            
            var id = $(this).data('id');
            var row = table.row($(this).parents('tr')).data();
            console.log(row , row.contact, row.name, row.adhar, row.pan, row.email, row.email);

        })
    });
 </script>
 
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
          ['2004/05',  165,      938,         522,             998,           450,      614.6],
          ['2005/06',  135,      1120,        599,             1268,          288,      682],
          ['2006/07',  157,      1167,        587,             807,           397,      623],
          ['2007/08',  139,      1110,        615,             968,           215,      609.4],
          ['2008/09',  136,      691,         629,             1026,          366,      569.6]
        ]);

        var options = {
          title : 'Monthly Coffee Production by Country',
          vAxis: {title: 'Cups'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
     <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
 
@endsection