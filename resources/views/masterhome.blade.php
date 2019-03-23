<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.png">
      <title>Đến mà xem/@yield('title')</title>
      <base href="{{asset('')}}">
      <link href="public/source/css/bootstrap.css" rel="stylesheet">
      <link href='public/source/http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="public/source/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="public/source/css/flexslider.css" type="text/css" media="screen"/>
      <link href="public/source/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="public/source/css/style.css" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
      <div class="wrapper">
       @include('header')
         @yield('content')
         @include('footer')
      </div>
      <!-- Bootstrap core JavaScript==================================================-->
	  <script type="text/javascript" src="public/source/js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="public/source/js/jquery.easing.1.3.js"></script>
	  <script type="text/javascript" src="public/source/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="public/source/js/jquery.sequence-min.js"></script>
	  <script type="text/javascript" src="public/source/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	  <script defer src="public/source/js/jquery.flexslider.js"></script>
	  <script type="text/javascript" src="public/source/js/script.min.js" ></script>
   </body>
</html>