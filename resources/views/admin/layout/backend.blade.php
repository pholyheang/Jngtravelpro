<!DOCTYPE html>
<html>
<head> 
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/_all-skins.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/AdminLTE.min.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/font-awesome.min.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/bootstrap3-wysihtml5.min.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/bootstrap-datepicker.min.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/daterangepicker.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/ionicons.min.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/jquery-jvectormap.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/admin.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/blue.css') }}">
	
	
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/jquery.dataTables.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/dataTables.bootstrap.min.css') }}">


	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/raphael.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/morris.min.js') }}"></script>	
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery.sparkline.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery.knob.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/daterangepicker.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/bootstrap-datepicker.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/bootstrap3-wysihtml5.all.min.js') }}"></script>	

	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery.slimscroll.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/fastclick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/adminlte.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/dashboard.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/demo.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/admin.js') }}"></script>	
	<script type="text/javascript" src="{{ asset('adminlte/js/insertData.js') }}"></script>	
	<script type="text/javascript" src="{{ asset('adminlte/js/retreiveData.js') }}"></script>	
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/ckeditor.js') }}"></script>	
	

	



	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>
	
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/summernote.js') }}"></script>	
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/summernote.css') }}">

</head>
<body>
	@yield('content')
</body>
</html>