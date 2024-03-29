<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('SISTEM PENGURUSAN RAWATAN PERUBATAN | E-RP') }}</title>

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('material') }}/img/sukk.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />

    @guest()
    @else
        <!-- Matomo Tag Manager -->
        <script type="text/javascript">
            var _mtm = window._mtm = window._mtm || [];
            _mtm.push({
                'mtm.startTime': (new Date().getTime()),
                'event': 'mtm.Start'
            });
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.src = 'https://aplikasi1.kelantan.gov.my/analytic/js/container_mJvLDMJc.js';
            s.parentNode.insertBefore(g, s);
        </script>
        <!-- End Matomo Tag Manager -->
    @endguest
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/fontawesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('material/css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
</head>
<style type="text/css">
    td {
        font-weight: bold;
    }

    th {
        font-weight: bold;
    }

    label {
        color: black;
    }
</style>

<body class="{{ $class ?? '' }}">
    @guest()
        @include('layouts.page_templates.guest')
    @else
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        @include('layouts.page_templates.auth')
    @endguest
    @if (auth()->check())
    @endif



    <!--   Core JS Files   -->
    <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
    <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script>
      <!-- Chartist JS -->
    <script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('material') }}/js/material-dashboard.js" type="text/javascript"></script>

    <script src="{{ asset('material') }}/js/settings.js"></script>
    {{-- <script src="{{ asset('select2/dist/js/select2.min.js') }}"></script> --}}
    <script src="{{ asset('select2/js/select2.full.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.js') }}">
    </script>
    {{-- <script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    

    @stack('js')

    @yield('script')


    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#non_export').dataTable({
            "language": {
                "emptyTable": "Tiada data",
                "lengthMenu": "_MENU_ Rekod setiap halaman",
                "zeroRecords": "Tiada padanan rekod yang dijumpai.",
                "info": "Paparan dari _START_ hingga _END_ dari _TOTAL_ rekod",
                "infoEmpty": "Paparan 0 hingga 0 dari 0 rekod",
                "infoFiltered": "(Ditapis dari jumlah _MAX_ rekod)",
                "search": "Carian:",
                "oPaginate": {
                    "sFirst": "Pertama",
                    "sPrevious": "Sebelum",
                    "sNext": "Seterusnya",
                    "sLast": "Akhir"
                }
            },
        });

        $(document).ready(function() {
            $('table.display').DataTable({
                "pageLength": 5,
                "lengthMenu": [5, 10, 15, 20],
                "language": {
                    "emptyTable": "Tiada data",
                    "lengthMenu": "_MENU_ Rekod setiap halaman",
                    "zeroRecords": "Tiada padanan rekod yang dijumpai.",
                    "info": "Paparan dari _START_ hingga _END_ dari _TOTAL_ rekod",
                    "infoEmpty": "Paparan 0 hingga 0 dari 0 rekod",
                    "infoFiltered": "(Ditapis dari jumlah _MAX_ rekod)",
                    "search": "Carian:",
                    "oPaginate": {
                        "sFirst": "Pertama",
                        "sPrevious": "Sebelum",
                        "sNext": "Seterusnya",
                        "sLast": "Akhir"
                    }
                },
                "order": [
                    [1, "desc"]
                ]
            });
        });

        $(document).ready(function() {
            $('table.display1').DataTable({
                "pageLength": 5,
                "lengthMenu": [5, 10, 15, 20],
                "language": {
                    "emptyTable": "Tiada data",
                    "lengthMenu": "_MENU_ Rekod setiap halaman",
                    "zeroRecords": "Tiada padanan rekod yang dijumpai.",
                    "info": "Paparan dari _START_ hingga _END_ dari _TOTAL_ rekod",
                    "infoEmpty": "Paparan 0 hingga 0 dari 0 rekod",
                    "infoFiltered": "(Ditapis dari jumlah _MAX_ rekod)",
                    "search": "Carian:",
                    "oPaginate": {
                        "sFirst": "Pertama",
                        "sPrevious": "Sebelum",
                        "sNext": "Seterusnya",
                        "sLast": "Akhir"
                    }
                },
                "order": [
                    [0, "desc"]
                ]
            });
        });

        $('#zero_config').dataTable({
            "language": {
                "emptyTable": "Tiada data",
                "lengthMenu": "_MENU_ Rekod setiap halaman",
                "zeroRecords": "Tiada padanan rekod yang dijumpai.",
                "info": "Paparan dari _START_ hingga _END_ dari _TOTAL_ rekod",
                "infoEmpty": "Paparan 0 hingga 0 dari 0 rekod",
                "infoFiltered": "(Ditapis dari jumlah _MAX_ rekod)",
                "search": "Carian:",
                "oPaginate": {
                    "sFirst": "Pertama",
                    "sPrevious": "Sebelum",
                    "sNext": "Seterusnya",
                    "sLast": "Akhir"
                }
            },
            // "dom": 'Bfrtip',
            "buttons": [
                // { extend: 'copy', className: 'btn-info'},
                {
                    extend: 'excel',
                    className: 'btn-success'
                },
                {
                    extend: 'pdf',
                    className: 'btn-danger'
                },
                {
                    extend: 'print',
                    className: 'btn-warning'
                }
            ]
        });
    </script>

    <script>
        $('#kemaskinijabatan').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);

            var id = button.data('id');
            var singkatan = button.data('singkatan');
            var nama = button.data('nama');
            // Use above variables to manipulate the DOM

            $(".modal-body #id").val(id);
            $(".modal-body #singkatan").val(singkatan);
            $(".modal-body #nama").val(nama);
        });

        $('#kemaskinijawatan').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);

            var id = button.data('id');
            var jawatan = button.data('jawatan');
            // Use above variables to manipulate the DOM

            $(".modal-body #id").val(id);
            $(".modal-body #jawatan").val(jawatan);
        });

        $('#kemaskinipengguna').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);

            var id = button.data('id');
            var nama = button.data('nama');
            var ic = button.data('ic');
            var level = button.data('level');
            var status = button.data('status');
            var email = button.data('email');
            // Use above variables to manipulate the DOM

            $(".modal-body #id").val(id);
            $(".modal-body #nama").val(nama);
            $(".modal-body #ic").val(ic);
            $(".modal-body #level").val(level);
            $(".modal-body #status").val(status);
            $(".modal-body #email").val(email);
        });


        $(document).ready(function() {
            // initialise Datetimepicker and Sliders
            md.initFormExtendedDatetimepickers();
            if ($('.slider').length != 0) {
                md.initSliders();
            }
        });


        $('#tambahwaris').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            var id = button.data('id');
            // Use above variables to manipulate the DOM
            $(".modal-body #id").val(id);
        });

        $('#padampagawai').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            var id = button.data('id');
            // Use above variables to manipulate the DOM
            $(".modal-body #id").val(id);
        });
        $('#padamwaris').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            var id = button.data('id');
            // Use above variables to manipulate the DOM
            $(".modal-body #id").val(id);
        });
        $('#padamperubatan').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            var id = button.data('id');
            // Use above variables to manipulate the DOM
            $(".modal-body #id").val(id);
        });

        $('#tambahbil').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            var id = button.data('id');
            // Use above variables to manipulate the DOM
            $(".modal-body #id").val(id);
        });
        $('#tambahbilwaris').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            var id = button.data('id');
            var idwaris = button.data('idwaris');
            // Use above variables to manipulate the DOM
            $(".modal-body #id").val(id);
            $(".modal-body #idwaris").val(idwaris);
        });
        $('#padambil').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            var id = button.data('id');
            // Use above variables to manipulate the DOM
            $(".modal-body #id").val(id);
        });
    </script>

    <script>
        $(document).ready(function() {

            $('#formLaporann').submit(function() {
                $.ajax({
                    type: 'POST',
                    url: 'test.php',
                    data: $(this).serialize()
                })

                return false
            });

            $('#btnFilter').click(function() {
                $('.filterTable').toggle()
            });

            $('#jenisLaporan').change(function() {
                if ($(this).val() == 1) {
                    $('#divKategoriLaporan').show()
                    $('#kategoriLaporan').prop('required', true);
                } else {
                    $('#divKategoriLaporan').hide()
                    $('#kategoriLaporan').prop('required', false);
                }
            });
        });

        $('#namaHospital').on('change', function() {
            let id = "";
            id = $('#namaHospital').val();

            $('.alamatHospital').val(id);
        });

        $('#namaPembekal').on('change', function() {
            let id = "";
            id = $('#namaPembekal').val();
            $('.alamatPembekal').val(id);
        });

        $(".select2").select2({
            theme: 'bootstrap4'
        });

        $('#editPembekal').click(function() {
            if ($('#namaPembekal').val() != 0) {

                var idP = $('#namaPembekal').val();

                $.ajax({
                        type: 'GET',
                        url: 'loadPembekal.php?id=' + idP,
                        dataType: 'json',
                    })

                    .done(function(data) {

                        $('#idPembekal').val(idP);
                        $('#namaPembekalModal').val(data['nama'])
                        $('#alamatPembekal1').val(data['alamat1'])
                        $('#alamatPembekal2').val(data['alamat2'])
                        $('#alamatPembekal3').val(data['alamat3'])
                        $('#bandarPembekal').val(data['bandar'])
                        $('#poskodPembekal').val(data['poskod'])
                        $('#negeriPembekal').val(data['negeri'])
                        $('#btnPembekal').html(' Kemaskini ')
                        $('#methodUpdatePembekal').val('edit')
                        $('#pembekalModal').modal('show')
                    })

                    .fail(function(data) {

                        console.log("fail")
                    })

            } else {
                new PNotify({
                    delay: 1000,
                    title: '',
                    text: 'Tiada data untuk diedit',
                    type: 'error',
                    styling: 'bootstrap3'
                })
            }

        });
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" defer></script>
    
    <script>


        $(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left'
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                    .format('YYYY-MM-DD'));
            });
        });
    </script>

    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "https://aplikasi1.kelantan.gov.my/analytic/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', 'qdjomgbl5ezvwgvanwkry431x']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <noscript>
        <p><img src="https://aplikasi1.kelantan.gov.my/analytic/matomo.php?idsite=qdjomgbl5ezvwgvanwkry431x&amp;rec=1"
                style="border:0;" alt="" /></p>
    </noscript>

    @guest()
    @else
        <input type="hidden" id="userid" value="{{ Auth::user()->kad_pengenalan }}">
    @endguest


</body>

</html>
