<div class="full-width-header {{ request()->is('/') ? 'header-style2' : '' }}">
    <div class="toolbar-area hidden-md">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="toolbar-contact">
                        <ul>
                            <li><i class="flaticon-email"></i>
                                @foreach ($contact as $item)
                                    @if ($item->key=='Email')
                                        
                                        <a href="mailto:{{$item->value}}">{{$item->value}}</a>
                                    @endif
                                    
                                @endforeach
                                
                            </li>
                            <li><i class="flaticon-call"></i>
                                @foreach ($contact as $item)
                                @if ($item->key=='Phone')
                                    <a href="tel:{{$item->value}}">{{$item->value}}</a>
                                @endif
                                
                            @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="toolbar-sl-share">
                        <ul>
                            <li class="opening"> <i class="flaticon-clock"></i> Mon - Fri: 9:00 am - 06.00pm</li>
                            @foreach ($social as $item)
                                <li><a href="{{$item->value}}">{!!$item->icon!!}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header id="rs-header" class="rs-header">
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo-area">
                            <a class="light" href="/"><img src="{{asset("assets/images/logo-law.svg")}}" alt="logo"></a>
                            <a class="dark" href="/"><img src="{{asset("assets/images/logo-law-dark.svg")}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-10 text-right">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <div class="mobile-menu">
                                    <a class="rs-menu-toggle">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </div>
                                <nav class="rs-menu pr-55">
                                    @if(request()->is('/'))
                                    <ul id="onepage-menu" class="nav-menu">
                                        <li class="active-menu"><a href="#rs-header">Home</a></li>
                                        <li><a href="#rs-about">About</a></li>
                                        <li><a href="#rs-services">Services</a></li>
                                        <li><a href="#rs-casestudies">Portfolio</a></li>
                                        <li><a href="#rs-team">Team</a></li>
                                        <li><a href="#rs-blog">Blog</a></li>
                                        <li><a href="#rs-contact">Contact</a></li>
                                    </ul> 
                                    @else
                                    <ul class="nav-menu">
                                        <li class="active-menu"><a href="/">Home</a></li>
                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li><a href="{{route('service')}}">Services</a></li>
                                        <li><a href="{{route('project')}}">Portfolio</a></li>
                                        <li><a href="{{route('team')}}">Team</a></li>
                                        <li><a href="{{route('blog')}}">Blog</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                    </ul> 
                                    @endif
                                </nav>
                            </div> 
                            <div class="expand-btn-inner">
                                <ul>
                                    
                                    <li>
                                        <a id="nav-expander" class="humburger nav-expander" href="#">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                            <span class="dot4"></span>
                                            <span class="dot5"></span>
                                            <span class="dot6"></span>
                                            <span class="dot7"></span>
                                            <span class="dot8"></span>
                                            <span class="dot9"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="right_menu_togle hidden-md">
            <div class="close-btn">
                <span id="nav-close" class="humburger">
                    <span class="dot1"></span>
                    <span class="dot2"></span>
                    <span class="dot3"></span>
                    <span class="dot4"></span>
                    <span class="dot5"></span>
                    <span class="dot6"></span>
                    <span class="dot7"></span>
                    <span class="dot8"></span>
                    <span class="dot9"></span>
                </span>
            </div>
            <div class="canvas-logo">
                <a href="/"><img src="{{asset("assets/images/logo-law-dark.svg")}}" alt="logo"></a>
            </div>
            <div class="offcanvas-text">
                @foreach ($about as $item)
                    @if($item->key=='About Us')
                    {!!$item->value!!}
                    @endif
                @endforeach
            </div>
            <div class="canvas-contact">
                <ul class="contact">
                    <li><i class="flaticon-location"></i> 
                        @foreach ($contact as $item)
                            @if($item->key=='Address')
                                {{$item->value}}
                            @endif
                        @endforeach
                    </li>
                    <li><i class="flaticon-call"></i>
                        @foreach ($contact as $item)
                            @if($item->key=='Phone')
                                <a href="tel:{{$item->value}}">{{$item->value}}</a>
                            @endif
                        @endforeach
                    </li>
                    <li><i class="flaticon-email"></i>
                        @foreach ($contact as $item)
                        @if($item->key=='Email')
                            <a href="mailto:{{$item->value}}">{{$item->value}}</a>
                        @endif
                    @endforeach
                    </li>
                    
                </ul>
                <ul class="social">
                    @foreach ($social as $item)
                        <li><a href="{{$item->value}}">{!!$item->icon!!}</a></li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </header>
</div>
