@include('master.header')
<body>
<div id="wrapper">
    @include('master.topbar')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row rd-cont-area">
                @yield('page')
            </div>
            <!--  -->
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
@include('master.footer')