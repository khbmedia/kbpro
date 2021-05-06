<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="themexriver">

    <title> {{config('app.name')}} | Page Not Found</title>

    <link href="{{asset('photos/favicon.png')}}" rel="shortcut icon" type="image/png">

    <link href="{{asset('photos/favicon.png')}}" rel="apple-touch-icon">

    <link href="{{asset('photos/favicon.png')}}" rel="apple-touch-icon" sizes="72x72">

    <link href="{{asset('photos/favicon.png')}}" rel="apple-touch-icon" sizes="114x114">

    <link href="{{asset('photos/favicon.png')}}" rel="apple-touch-icon" sizes="144x144">

    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/css/flaticon.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/css/owl.carousel.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/css/owl.theme.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/css/owl.transitions.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/css/jquery.fancybox.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/css/bootstrap-select.min.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/css/magnific-popup.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/rs-plugin/css/settings.css')}}" rel="stylesheet"  media="screen">

    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/font-awesome.min.css')}}">

    @yield('customCss')



</head>



<body class="home-style3">

    <div class="page-wrapper">

       
        <div class="row" style="margin-top:40vh;">
        <div class="col-md-2 col-md-offset-5"><img src="{{asset('frontend/images/logo.png')}}" style="width:100%" class="img-responsive"></div>
        <div class="col-md-12">
            <h1 style="text-align:center;color:rgb(48, 121, 180);">Page Not Found</h1>
        </div>
    </div>
       
        <div class="row">
        <div class="col-md-2 col-md-offset-5"><a href="{{route('home')}}"class="btn btn-primary btn-block">Back Home</a></div>
        </div>
        

    </div>

    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>

    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('frontend/js/jquery-plugin-collection.js')}}"></script>

    <script src="{{asset('frontend/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>

    <script src="{{asset('frontend/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

    <script src="{{asset('frontend/js/script.js')}}"></script>

</body>

</html>

