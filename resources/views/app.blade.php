<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
<link href="{{ asset('/css/default.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/css/fonts.css') }}" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">GuestBook</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="#" title="">HOME</a></li>
				<li><a href="#" accesskey="2" title="">Posts</a></li>
				<li><a href="#" accesskey="3" title="">Comments</a></li>
				<li><a href="#" accesskey="4" title="">Development</a></li>
				<li><a href="#" accesskey="5" title="">About Us</a></li>
			</ul>
		</div>
	</div>
	</div>
	@yield('banner')
	<div id="extra" class="container">
			@yield('content')
	</div>
</div>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<div id="copyright" class="container">
	<p>&copy;  2015 GuestBook</p>
</div>
</body>
</html>
