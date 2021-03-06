<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>My Love Story | @yield('title')</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-responsive.min.css') }}" />
<link href="{{ asset('css/frontend_css/layout.css') }}" rel="stylesheet">
<!-- Sweetalert -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css " />
<!-- Date picker -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<!-- Data Table -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />

<script src="{{ asset('js/frontend_js/jquery.js') }}"></script>
<script src="{{ asset('js/frontend_js/jquery.validate.js') }}"></script>
<script src="{{ asset('js/frontend_js/additional-methods.js') }}"></script>
<script src="{{ asset('js/frontend_js/main.js') }}"></script>
<!-- Sweetalert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js "></script>
<!-- Slideshow Viewer API -->
<script type="text/javascript" src="https://slideshow.triptracker.net/slide.js"></script>
<!-- Data Table -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!-- View Popup Window-->
<script src="{{ asset('js/backend_js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/backend_js/matrix.popover.js') }}"></script>
<!-- Date picker -->
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#dob" ).datepicker({
      dateFormat: 'yy-mm-dd',
      changeMonth: true,
      changeYear: true,
      maxDate: '0',
      yearRange: 'c-100:c+0'});
  });
</script>

</head>
<body>
<div id="layout">
  <div class="layout_inner">
    <div id="body_container">

      @include('layouts.frontLayout.front_header')
      @include('layouts.frontLayout.front_sidebar')
      
      @yield('content')

    </div>
  </div>

  @include('layouts.frontLayout.front_footer')
  
</div>
</body>
</html>
