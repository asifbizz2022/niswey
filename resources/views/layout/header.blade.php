<header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                           
                        <div class="navbar-brand-box">
                            <a href="#" class="logo logo-dark">
                                <span class="logo-sm fw-bold text-uppercase text-warning">
								 <!-- <img src="{{ url('/') }}/public/assets/images/logo.svg" alt="" height="22"> --> 
								 A
                                </span>
                                <span class="logo-lg fw-bold text-uppercase text-warning">
                                    <!-- <img src="{{ url('/') }}/public/assets/images/logo-dark.png" alt="" height="17">-->
									Admin
                                </span>
                            </a>

                            <a href="#" class="logo logo-light">
                                <span class="logo-sm fw-bold text-uppercase text-warning">
                                    <!--<img src="{{ url('/') }}/public/assets/images/logo-light.svg" alt="" height="22">-->
								 A
                                </span>
                                <span class="logo-lg fw-bold text-uppercase text-warning">
                                    <!--<img src="{{ url('/') }}/public/assets/images/logo-light.png" alt="" height="19">-->
									Admin
                                </span>
                            </a>
                        </div>
						 
						

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>

                      
                    </div>

                    <div class="d-flex"> 
                         
                     
                      
                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div> 
                        <div class="my-auto">
                            <a href="{{ route('home') }}" class=" ">
                                <button class="btn btn-outline-primary"><i class="fa fa-user"></i> </button>
                            </a>  
                        </div>
                       
                      

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="  header-profile-user"src="{{ url('/public/assets') }}/images/users/user.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">
                                     {{ auth()->guard('web')->user()->name}}
                                </span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                                <a class="dropdown-item d-block" href="{{ route('user.settings') }}">
                                    <span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}">
                                    <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> 
                                    <span key="t-logout">Logout</span>
                                </a> 

                                     
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                          <!--   <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="bx bx-cog bx-spin"></i>
                            </button> -->
                        </div>

                    </div>
                </div>
            </header> 