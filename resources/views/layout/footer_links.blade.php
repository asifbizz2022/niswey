<script src="{{url('/')}}/public/assets/libs/jquery/jquery.min.js"></script>
<script src="{{url('/')}}/public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('/')}}/public/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{url('/')}}/public/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{url('/')}}/public/assets/libs/node-waves/waves.min.js"></script>
<!-- apexcharts -->
 
<!-- dashboard init -->
 

<!-- Require.d .datatable js -->
<script src="{{url('/')}}/public/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{url('/')}}/public/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="{{url('/')}}/public/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('/')}}/public/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{url('/')}}/public/assets/libs/jszip/jszip.min.js"></script>
<script src="{{url('/')}}/public/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="{{url('/')}}/public/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="{{url('/')}}/public/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{url('/')}}/public/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{url('/')}}/public/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<!-- select 2 plugin -->
<!-- Responsive examples -->
<script src="{{url('/')}}/public/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('/')}}/public/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="{{url('/')}}/public/assets/libs/table-edits/build/table-edits.min.js"></script>
<script src="{{url('/')}}/public/assets/js/pages/table-editable.int.js"></script>
<!-- Datatable init js -->
<script src="{{url('/')}}/public/assets/js/pages/datatables.init.js"></script>
<!-- App js -->
<script src="{{url('/')}}/public/assets/libs/select2/js/select2.min.js"></script>
<!-- dropzone plugin -->
<script src="{{url('/')}}/public/assets/libs/dropzone/min/dropzone.min.js"></script>
<!-- init js -->
<script src="{{url('/')}}/public/assets/js/pages/ecommerce-select2.init.js"></script>
<script src="{{url('/')}}/public/assets/js/app.js"></script>
<script src="{{url('/')}}/public/assets/js/pages/validation.init.js"></script>

<script type="text/javascript">

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
		toastr.options = {
				'closeButton': true,
				'debug': false,
				'newestOnTop': false,
				'progressBar': false,
				'positionClass': 'toast-top-right',
				'preventDuplicates': false,
				'showDuration': '1000',
				'hideDuration': '1000',
				'timeOut': '5000',
				'extendedTimeOut': '1000',
				'showEasing': 'swing',
				'hideEasing': 'linear',
				'showMethod': 'fadeIn',
				'hideMethod': 'fadeOut',
			}
</script>
<script>
      $(document).ready(function() {
                $('.table').DataTable({
                    paging : 'FALSE',
                    dom: 'Bfrtip', // This adds the Buttons extension controls
                     
                    buttons: [
                        'csv', 'excel', 'print','pdf'
                    ]
                });
            });
    </script>