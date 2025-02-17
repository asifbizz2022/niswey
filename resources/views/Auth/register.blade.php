<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layout.header_links') 
    <title>
        
    </title>
    <style type="text/css">
    .form-group{
       margin-top: 10px; 
        }
    </style>
</head>
<body class="bg-info pt-5">
<div class="container mt-5">
    <div class="row ">
    <div class="col ">
        <div class="card  mx-auto">
            <div class="card-header bg-warning ">
                <div class="fs-5 text-center text-uppercase fw-bold">
                    Join form
                </div>
            </div>
            <div class="card-body p-3">
            <form class="form" method="post" action="{{ route('register') }}">@csrf
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label>Enter Pin Number</label>
                           <input type="" name="member_code" class="form-control   pin-no" value="{{@$pin}}" >
                           @error('member_code')
                           <span class="text-danger"> 
                            {{$message}}
                           </span>
                           @enderror
                           <div class="code-error text-danger fw-bold fs-6 text-center">
                               
                           </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                         <div class="form-group">
                            <label>Package</label>
                            <input type="" name="packages" class="form-control   package  " readonly value="{{@$course}}" >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label>Sponser Id</label>
                           <input type="" name="sponser_id" class="form-control   sponser_id">
                        </div>
                         <div class="sponser_name text-danger fw-bold text-uppercase my-1"></div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                         <div class="form-group">
                            <label>Position</label>
                            <select class="form-control   position" required name="position">
               
                            </select>  
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 text-center text-danger text-uppercase  ">
                       <div class="form-group  ">
                           
                           
                           <div class="pos-msg border border-primary fw-bold fs-5">
                               
                           </div>  
                       </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="" name="name" class="form-control  " placeholder="Enter Your Name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" class="form-control  ">
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control  " name="gender">
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                                <option value="O">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label>Mobile Number</label>
                               <input type="" name="contact" class="form-control  " minlength="10" maxlength="10" value="{{old('contact')}}">
                               @error('contact')
                               <span class="text-danger"> {{$message}}</span>
                               @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control  " value="{{ old('email')}}">
                            @error('email')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                        <div class="form-group"> 
                                <input type="checkbox" name="agree" required>
                                <label>I Agree <span><a href="#">Terms and Conditions</a></span></label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning     text-dark fw-bold  ">Register</button>
                            <a href="{{ url('/') }}/login" class="btn btn-warning    fw-bold  text-dark ">Login</a>
                        </div> 
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
 
</div>
</body>
</html>

@include('layout.footer_links')
 
<script type="text/javascript">
 
</script>