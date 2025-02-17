<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('/') }}/public/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ url('/') }}/public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ url('/') }}/public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ url('/') }}/public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-dark">
        <div class="account-pages my-3 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-info">
                                <div class="row">
                                    <div class="col-7">
                                        <div class=" p-3">
                                            <span class="text-light fw-bold fs-5 px-3 text-uppercase ">Register</span>
                                            
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                            <div class="card-body pt-3"> 
                                <div class="auth-logo"> 
                                  
                                </div>
                                <div class="p-2">
                                   <form class="form" method="post" action="{{ route('register') }}"> 
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="username" placeholder="Enter username" value="{{ old('name') }}">
                                            @error('name')
                                            <p class="text-danger">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="username" placeholder="Enter Email" value="{{ old('email') }}">
                                            @error('email')
                                            <p class="text-danger">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" name="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                            <div>
                                                 <label for="password-confirm" class="col-md-4 col-form-label  ">{{ __('Confirm Password') }}</label>
                                                                    <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation"   autocomplete="new-password">
                                            </div>
                                            @error('password')
                                            <p class="text-danger">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>

                                         
                                      
                                        
                                        <div class="mt-3 d-grid">
                                            <button type="submit" class="btn btn-info waves-effect waves-light text-light fw-bold" type="submit">Register</button>
                                        </div>
                                            
                                        <div class="mt-3 mb-3 text-center text-danger fw-bold text-uppercase w-100">
                                            @if(Session::has('message'))
                                            <div class="bg-danger text-white p-1 w-100">{{Session::get('message')}}</div>
                                            @endif
                                        </div>
                                        <div class="mt-4 text-center">
                                           
                                            <p>Already have an account ? <a href="{{ route('login') }}" class="fw-medium text-primary"> Login </a> </p>
                                        
                                        </div>
                                        
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                          
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

        <!-- JAVASCRIPT -->
        <script src="{{ url('/') }}/public/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ url('/') }}/public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('/') }}/public/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ url('/') }}/public/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ url('/') }}/public/assets/libs/node-waves/waves.min.js"></script>
        
        <!-- App js -->
        <script src="{{ url('/') }}/public/assets/js/app.js"></script>
    </body>
</html>
