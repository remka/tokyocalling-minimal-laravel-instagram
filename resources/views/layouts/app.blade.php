<html>
    <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Tokyo Calling is a living tribute to the ephemeral art in the streets of Tokyo.">
      <meta name="author" content="">

      <title>Tokyo Calling - @yield('title')</title>

      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        crossorigin="anonymous">

      <!-- Custom Fonts -->
      <!-- <link href="css/lib/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
      <link href="//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
      <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

      <link rel="stylesheet" href="css/lib/grayscale.css">
      <link rel="stylesheet" href="css/main.css">

      <script type="text/javascript" src="//use.typekit.net/teo7bvr.js"></script>
      <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
      <!--[if IE]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        @section('navigation')
        <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                      <span class="red">Tokyo</span> Calling
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#latest">Latest</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                        <?php /*
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">English <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Français</a></li>
                            <li><a href="#">日本語</a></li>
                          </ul>
                        </li>
                        */ ?>
                        <li>
                            <a class="external" href="http://blog.tokyocalling.jp/" target="_blank">Blog</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        @show

        @yield('content')

        @section('footer')
          <footer>
            <div class="container text-center">
              <p>Crafted with <span class="hitHeart"><i class="fa fa-heart" aria-hidden="true"></i></span> in Tokyo in 2017.</p>
            </div>
          </footer>
        @show

        @section('javascript')
          <script
            src="//code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
          <script
            src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            crossorigin="anonymous"
            async>
          </script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
          <?php /* <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script> */ ?>
          <script
            src="//use.fontawesome.com/58408161fb.js"
            crossorigin="anonymous"
            async>
          </script>
          <script
            src="/js/lib/flowtype.js"
            crossorigin="anonymous"
            async>
          </script>
          <script
            src="/js/main.js"
            crossorigin="anonymous"
            async>
          </script>
        @show
    </body>
</html>
