<header class="site-header">



    <!-- start upper-topbar -->

    <div class="upper-topbar">

        <div class="container">

            <div class="row">

                <div class="col col-md-12 contact-info">

                    <ul>

                        @foreach ($contact as $item)

                            

                    @if(!$loop->last) 

                    <li>{!!$item->icon!!} {{$item->value}}</li>

                    @endif

                        @endforeach

                    </ul>

                </div>



                {{-- <div class="col col-md-5">

                    <div class="login-language">

                        <div class="login-register">

                            <span class="fi flaticon-key"></span>

                            <ul>

                                <li><a href="#">Login</a></li>

                                <li><a href="#">Register</a></li>

                            </ul>

                        </div>

                        <div class="language">

                            <span>Lang: </span>

                            <form>

                                <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="ENG"><span class="filter-option pull-left">ENG</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">ENG</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">TUK</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">SPH</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker" tabindex="-98">

                                    <option>ENG</option>

                                    <option>TUK</option>

                                    <option>SPH</option>

                                </select></div>

                            </form>

                        </div>

                    </div>

                </div> --}}

            </div> <!-- end row -->

        </div> <!-- end container -->

    </div>

    <!-- end upper-topbar -->





    <div class="lower-topbar">

        <div class="container">

            <div class="row lower-topbar">

                <div class="col col-sm-3">

                <a class="logo" href="{{route('home')}}"><img src="{{asset('frontend/images/logo.png')}}" height="70px" class="img img-responsive"></a>

                </div>

                <div class="col col-sm-9">

                    <div class="company-info">

                        <ul>

                            <li>

                                <span class="fi flaticon-time"></span>

                                <h4>Opening hours</h4>

                                @foreach ($about as $item)

                                @if($item->key=='OPENING HOURS')

                                    

                                    <span class="info">{!!$item->value!!}</span>

                                @endif

                            @endforeach

                                

                            </li>

                            <li>

                                <span class="fi flaticon-technology"></span>

                                <h4>Call us</h4>

                                @foreach ($contact as $item)

                                @if($item->key=='Phone')

                                    

                                    <span class="info">{!!$item->value!!}</span>

                                @endif

                            @endforeach

                                

                            </li>

                        </ul>

                    </div>

                </div>

            </div>                    

        </div>

    </div>            



    <nav class="navigation navbar navbar-default">

        <div class="container">

            <div class="navbar-header">

                <button type="button" class="open-btn">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

            </div>

            <div id="navbar" class="navbar-collapse collapse">

                <button class="close-navbar"><i class="fa fa-close"></i></button>

                <ul class="nav navbar-nav">

                    <li><a href="{{route('home')}}">Home</a></li>

                    <li><a href="{{route('about')}}">About</a></li>

                    <li><a href="{{route('service')}}">Services</a></li>

                    <li><a href="{{route('team')}}">Our People</a></li>

                    <li><a href="{{route('blog')}}">Events</a></li>

                    <li><a href="{{route('contact')}}">Contact</a></li>

                </ul>

            </div><!-- end of nav-collapse -->



            <ul class="social-links">

                @foreach ($social as $item)

                    

                

                <li><a href="{{$item->value}}" target="_blank">{!!$item->icon!!}</a></li>

                @endforeach

            </ul>

        </div><!-- end of container -->

    </nav>

</header>

