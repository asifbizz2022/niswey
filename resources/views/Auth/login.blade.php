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
                            <div class="bg-warning">
                                <div class="row">
                                    <div class="col-7">
                                        <div class=" p-3">
                                            <span class="text-dark fw-bold fs-5 px-3 text-uppercase">Login</span>
                                            
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                            <div class="card-body pt-3"> 
                                <div class="auth-logo"> 
                                  
                                </div>
                                <div class="p-2">
                                    <form   method="post" action="{{ route('login.check') }}">
                                        @csrf
        
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="username" placeholder="Enter username" value="{{ old('email') }}">
                                            <small class="text-danger">
                                                 @error('email') 
                                                    {{ $message }} 
                                                @enderror
                                            </small>
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" name="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                           <small class="text-danger">
                                                @error('email') 
                                                    {{ $message }} 
                                                @enderror
                                                
                                           </small>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-check">
                                            <label class="form-check-label" for="remember-check">
                                                Remember me
                                            </label>
                                        </div>
                                      
                                        
                                        <div class="mt-3 d-grid">
                                            <button type="submit" class="btn btn-warning waves-effect waves-light text-dark fw-bold" type="submit">Log In</button>
                                        </div>
                                            
                                        <div class="mt-3 mb-3 text-center text-danger fw-bold text-uppercase w-100">
                                            @if(Session::has('message'))
                                            <div class="bg-danger text-white p-1 w-100">{{Session::get('message')}}</div>
                                            @endif
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="#" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                            <p>Don't have an account ? <a href="{{ route('register.form') }}" class="fw-medium text-primary"> Signup now </a> </p>
                                        
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
