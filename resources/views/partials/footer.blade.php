
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Show success message
    @if(session('success'))
        Swal.fire({
            title: 'Success!',
            text: "{{ session('success') }}",
            icon: 'success',
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
    @endif

    // Show error message
    @if(session('error'))
        Swal.fire({
            title: 'Error!',
            text: "{{ session('error') }}",
            icon: 'error',
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
    @endif

    // Show info message
    @if(session('info'))
        Swal.fire({
            title: 'Logged Out!',
            text: "{{ session('info') }}",
            icon: 'info',
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
    @endif
</script>


<!-- jQuery -->

<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- Feather Icon JS -->
<script src="{{ asset('assets/js/feather.min.js') }}"></script>

<!-- Slimscroll JS -->
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

<!-- Daterangepicker JS -->
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>

<!-- Apexchart JS -->
<script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>

<!-- Datatable JS -->
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>

<!-- Custom Json JS -->
<script src="{{ asset('assets/js/jsonscript.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

<!-- Color Picker JS -->
<script src="{{ asset('assets/plugins/@simonwep/pickr/pickr.es5.min.js') }}"></script>

  <!-- Select2 JS -->
  <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

<!-- Summernote JS -->
<script src="{{ asset('assets/plugins/summernote/summernote-lite.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/theme-colorpicker.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elements = document.getElementsByClassName('toggle-theme');
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.display = 'none';
        }
    });
</script>

@yield('scripts')

</body>
</html>

  