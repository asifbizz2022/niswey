<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Verify Email  </title>
       
       
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('/') }}/public/logo-no-bg.png">

        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{ url('/') }}/public/assets/libs/owl.carousel/assets/owl.carousel.min.css">

        <link rel="stylesheet" href="{{ url('/') }}/public/assets/libs/owl.carousel/assets/owl.theme.default.min.css">

        <!-- Bootstrap Css -->
        <link href="{{ url('/') }}/public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ url('/') }}/public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ url('/') }}/public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>
    <style type="text/css">
    	.form-control, .btn{
    		border-radius: 0px;

    	}
    </style>

    <body class="auth-body-bg">
        
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                       <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">

                                <div class="d-flex flex-column h-100">
                                  	<div style="padding-left: 3cm;" class="fs-3 text-uppercase fw-bold text-secondary">Verify Email</div>
                                    <div class=" "> 
            							
                                        <div class="" style="padding: 3cm;">
                                        	@include('notification')
                                            <form action="{{ route('verify.email') }}" method="post">@csrf
                							
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Email</label>
                                                    <input type="email" name="email" class="form-control" id="username" placeholder="Enter username">
                                                    @error('email')
                                                    <span class="text-danger">
                                                    	{{$message}}
                                                    </span>
                                                    @enderror
                                                </div>
                         
                                                
                                                <div class="mt-3 d-grid">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Verify</button>
                                                </div> 

                                            </form>
                                            <div class="mt-5 text-center">
                                            	 
                                                <p> <a href="{{ url('login-form') }}" class="fw-medium text-info"> Login </a> </p>
                                            </div>
                                        </div>
                                    </div>

                                     
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>

                    <!-- end col 1  -->
                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">

                        <div class="auth-full-bg pt-lg-5 p-4">

                            <div class="w-100">
                                <div class="bg-overlay"></div>
                                <div class="d-flex h-100 flex-column">
    							  <div class="mb-4 mb-md-5 mx-auto">
                                        <a href="{{ url('/') }}/public/index.html" class="d-block auth-logo">
                                            <img src="{{ url('/') }}/public/logo-no-bg.png" alt="" height="50" class="auth-logo-dark">
                                            <img src="{{ url('/') }}/public/logo-no-bg.png" alt="" height="50" class="auth-logo-light">
                                        </a>
                                    </div>
                                    <div class="p-4 mt-auto">
                                        <div class="row justify-content-center">

                                            <div class="col-lg-7">
                                                <div class="text-center">
                                                    
                                                    <h4 class="mb-3"><i class="bx bxs-quote-alt-left text-danger h1 align-middle me-3"></i><span class="text-primary">5k</span>+ Satisfied clients</h4>
                                                    
                                                    <div dir="ltr">
                                                        <div class="owl-carousel owl-theme auth-review-carousel" id="auth-review-carousel">
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-16 mb-4">" Fantastic theme with a ton of options. If you just want the HTML to integrate with your project, then this is the package. You can find the files in the 'dist' folder...no need to install git and all the other stuff the documentation talks about. "</p>
    
                                                                    <div>
                                                                        <h4 class="font-size-16 text-primary">Abs1981</h4>
                                                                        <p class="font-size-14 mb-0">- Skote User</p>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
    
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-16 mb-4">" If Every Vendor on Envato are as supportive as Themesbrand, Development with be a nice experience. You guys are Wonderful. Keep us the good work. "</p>
    
                                                                    <div>
                                                                        <h4 class="font-size-16 text-primary">nezerious</h4>
                                                                        <p class="font-size-14 mb-0">- Skote User</p>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                 
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ url('/') }}/public/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ url('/') }}/public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('/') }}/public/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ url('/') }}/public/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ url('/') }}/public/assets/libs/node-waves/waves.min.js"></script>

        <!-- owl.carousel js -->
        <script src="{{ url('/') }}/public/assets/libs/owl.carousel/owl.carousel.min.js"></script>

        <!-- auth-2-carousel init -->
        <script src="{{ url('/') }}/public/assets/js/pages/auth-2-carousel.init.js"></script>
        
        <!-- App js -->
        <script src="{{ url('/') }}/public/assets/js/app.js"></script>

    </body>
</html>
