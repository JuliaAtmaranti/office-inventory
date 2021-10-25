<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>inventaris kantor</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ url('/assets/img/brand/favicon.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ url('/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ url('/assets/css/argon.css?v=1.2.0') }}" type="text/css">

  <!-- CSS TableData -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></script>
  <script src="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css"></script> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="main-content" id="panel">
    <!-- @include('layout.header') -->
    <!-- Page content -- -->
      @yield('content')
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ url('/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ url('/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('/assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ url('/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ url('/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ url('/assets/js/argon.js?v=1.2.0') }}"></script>

  <!-- JS Data Table -->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
  
  @yield('script')
  <!--JS Form-->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  @yield('script')

  
</body>
<script>
    $(document).ready(function() {
      $('#example').DataTable();
  } );
</script>
</html>