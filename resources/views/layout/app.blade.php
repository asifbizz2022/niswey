<!doctype html>
<html lang="en"> 
@include('layout.header_links') 
    <body data-sidebar="dark"> 
   
        <div id="layout-wrapper"> 
            @include('layout.header')
            <!-- ========== Left Sidebar Start ========== -->
            @include('layout.sidebar')
            <!-- Left Sidebar End -->  
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content"> 
                <div class="page-content">
                    <div class=" "> 
                       <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h3 class="mb-sm-0 font-size-21 mt-3">@yield('title', 'No Title')</h3> 
                                <!-- <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Utility</a></li>
                                        <li class="breadcrumb-item active">Starter Page</li>
                                    </ol>
                                </div> --> 
                            </div>
                        </div>
                    </div>  
                        @yield('content') 
                    </div>  
                </div>
                <!-- End Page-content -->  
                @include('layout.footer')
            </div>
            <!-- end main content--> 
        </div>
       
      
       
      @include('layout.footer_links')
    @yield('js')
    </body>
</html>
