@include('layouts.head')
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  @include('layouts.navbar')
  @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('layouts.events')
   @yield('content')
  </div>
  <!-- /.content-wrapper -->

  @include('layouts.footer')