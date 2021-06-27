<script src=" {{ asset('public/admin/assets/js/popper.min.js')}} "></script>

<script src=" {{ asset('public/admin/assets/js/lib/data-table/dataTables.bootstrap.min.js') }} "></script>
<script src=" {{ asset('public/admin/assets/js/lib/data-table/dataTables.buttons.min.js') }} "></script>

<script src=" {{ asset('public/admin/assets/js/lib/data-table/buttons.bootstrap.min.js') }} "></script>
<script src=" {{ asset('public/admin/assets/js/lib/data-table/jszip.min.js') }} "></script>
<script src=" {{ asset('public/admin/assets/js/lib/data-table/pdfmake.min.js') }} "></script>
<script src=" {{ asset('public/admin/assets/js/lib/data-table/vfs_fonts.js') }} "></script>
<script src=" {{ asset('public/admin/assets/js/lib/data-table/buttons.html5.min.js') }} "></script>
<script src=" {{ asset('public/admin/assets/js/lib/data-table/buttons.print.min.js') }} "></script>
<script src=" {{ asset('public/admin/assets/js/lib/data-table/buttons.colVis.min.js') }} "></script>
<script src=" {{ asset('public/admin/assets/js/lib/data-table/datatables-init.js') }} "></script>

<script src="{{ asset('public/admin/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="{{ asset('public/admin/assets/js/plugins.js')}}"></script>
<script src="{{ asset('public/admin/assets/js/main.js')}}"></script>

<script src="{{ asset('public/admin/assets/js/dashboard.js')}}"></script>
<script src="{{ asset('public/admin/assets/js/widgets.js')}}"></script>
<script src="{{ asset('public/admin/assets/js/lib/chosen/chosen.jquery.min.js') }}"></script>

<!-- selector -->

<script>
    jQuery(document).ready(function() {
        jQuery(".myselect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Nothing found!",
            width: "100%"
        });
    });
</script>

<!-- CKEditor -->

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->

<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script src="http://cdn.ckeditor.com/4.16.0/standard-all/adapters/jquery.js"></script>

<script>
    CKEDITOR.replace("body-editor");
    CKEDITOR.replace("excerpt-editor");
</script>

<!-- datatable -->

<script type="text/javascript">
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    });
</script>
