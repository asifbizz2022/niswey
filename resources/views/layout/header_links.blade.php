 <head>
    <meta charset="utf-8" />
    <title>User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" /> 
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('/public/assets/images/favicon.ico') }}"> 
    <!-- DataTables -->
    <link href="{{ url('/public/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/public/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 
    <!-- Responsive datatable examples -->
    <link href="{{ url('/public/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- select2 css -->
    <link href="{{ url('/public/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- dropzone css -->
    <link href="{{ url('/public/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="{{ url('/public/assets/css/bootstrap.min.css')}}" id="bootstrap-style" defer rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('/public/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('/public/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ url('/public/assets/custom.css') }}">
    
</head>