<!DOCTYPE html>
<html lang="kh">
<head>
        <meta charset="utf-8">
        <title>KH Pro – Consulting Business</title>
        <meta name="description" content="">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/fav.svg')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/aos.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/off-canvas.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/linea-fonts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/flaticon.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/rsmenu-main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/inc/custom-slider/css/nivo-slider.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/inc/custom-slider/css/preview.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/rsmenu-transitions.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rs-spacing.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}"> 
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    </head>
    <body class="home-ten">
        {{-- @dd($clients) --}}
        {{-- <div id="loader" class="loader">
            <div class="spinner"></div>
        </div> --}}
        @include('frontend.include.header')

        @yield('content')
        @include('frontend.include.footer')
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text" required="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.j')}}s"></script>
        <script src="{{asset('assets/js/rsmenu-main.js')}}"></script> 
        <script src="{{asset('assets/js/jquery.nav.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/js/imagesloaded.pkgd.min.j')}}s"></script>
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/aos.js')}}"></script>
        <script src="{{asset('assets/js/skill.bars.jquery.js')}}"></script>
        <script src="{{asset('assets/js/jquery.counterup.min.j')}}s"></script>         
        <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/inc/custom-slider/js/jquery.nivo.slider.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/parallax-effect.min.js')}}"></script>
        <script src="{{asset('assets/js/contact.form.js')}}"></script>
        <script src="{{asset('assets/js/jQuery-plugin-progressbar.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>