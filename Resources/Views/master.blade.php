<!DOCTYPE html>
<html>
  <head>    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Seo meta tags -->
    <title>{{ $seo->data['title'] }}</title>
    <meta name="description" content="{{ $seo->data['description'] }}">
    <meta name="keywords" content="{{ $seo->data['keywords'] }}">
    <meta name="author" content="{{ $seo->data['author'] }}">

    <!-- Bootstrap -->
    <link href="{{ url('cms/app/Modules/Crevisoft/Resources/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('cms/app/Modules/Crevisoft/Resources/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('cms/app/Modules/Crevisoft/Resources/css/animate.css') }}" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ url('cms/app/Modules/Crevisoft/Resources/js/jquery-1.11.2.min.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script  src="js/html5shiv.min.js"></script>
        <script  src="js/respond.min.js"></script>
      <![endif]-->
  </head>

  <body>
    
    <!-- Start Header Menu -->
    {!! \CMS::menus()->renderMenu('header_menu', \Lang::locale(), 'templates.menus.header_menu')  !!} 
    <!-- End Header Menu -->

    @yield('content')

    @include('crevisoft::parts.footer')
    
    <!--Start Section scrolltotop-->
    
    <div class="scrolltotop">
      <a href="#top"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!--End Section scrolltotop-->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('cms/app/Modules/Crevisoft/Resources/js/bootstrap.js') }}"></script>
    <script src="{{ url('cms/app/Modules/Crevisoft/Resources/js/custom.js') }}"></script>
    <script src="{{ url('cms/app/Modules/Crevisoft/Resources/js/wow.min.js') }}"></script>
    <script>
      new WOW().init();
    </script>

  </body>
</html>