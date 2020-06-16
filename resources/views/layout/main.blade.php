<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('MDB/css/mdb.min.css') }}">
        <link rel="stylesheet" href="{{ asset('MDB/css/mdb.lite.min.css') }}">
        <title>@yield('title')</title>
    </head>
    <body class="fixed-sn white-skin"  style="background-color:#edf3ff;">
    
        <!-- Main Navigation -->
            <header>
                <!-- Sidebar navigation -->
                <div id="slide-out" class="side-nav sn-bg-4 fixed">
                    @include('layout.sidebar')
                </div>
                <!-- Sidebar navigation -->

                @include('layout.navbar')

            </header>
        <!-- Main Navigation -->

        <!-- Main layout -->
            @yield('container')
        <!-- Main layout -->

        <!-- Footer -->
            @include('layout.footer')
        <!-- Footer -->

        <!-- JQuery -->
        <script src="{{ asset('MDB/js/jquery-3.4.1.min.js') }}"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{ asset('MDB/js/popper.min.js') }}"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{ asset('MDB/js/bootstrap.js') }}"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{ asset('MDB/js/mdb.min.js') }}"></script>
        <!-- Initializations -->
        <script>
            // SideNav Initialization template
            $(".button-collapse").sideNav();

            var container = document.querySelector('.custom-scrollbar');
            var ps = new PerfectScrollbar(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
            });

            // Data Picker Initialization
            $('.datepicker').pickadate();

            // Material Select Initialization
            $(document).ready(function () {
            $('.mdb-select').material_select();
            });

            // Tooltips Initialization
            $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            })

        </script>
    </body>
</html>