@extends('frontend.layout.app')
@section('content')
@section('title','Home')
<div class="main-content">
    <div id="rs-slider" class="rs-slider slider10">
        <div class="slider-carousel2 owl-carousel">
            @foreach($slides as $item)
            <div class="slider slide{{$loop->iteration}}" style="background-image:url({{asset("storage/$item->image")}})">
                <div class="container">
                    <div class="content-part">
                        <div class="slider-des">
                            <div class="sl-subtitle mb-13">{{$item->description}}</div>
                            <h1 class="sl-title mb-0">{{$item->title}}</h1>
                        </div>
                        <div class="slider-bottom mt-36">
                            <ul>
                                <li><a href="{{$item->link}}" class="readon">Get In Touch</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="rs-services style11 sm-pt-80">
        <div class="container">
            <div class="service-wraping navy-bg mt--100 sm-mt-0">
                <div class="top-part pb-40 mb-62 md-mb-40">
                    <div class="row y-middle">
                        <div class="col-lg-8 md-mb-30">
                            <h3 class="title white-color mb-0">Need Any Help Schedule A Consultation</h3>
                        </div>
                        <div class="col-lg-4">
                            <div class="btn-part text-lg-right">
                                <a class="readon" href="{{route('contact')}}">Free Consultation</a>
                            </div>
                        </div>
                    </div>
                    <div class="justice-icon"><img src="assets/images/justice.svg" alt=""></div>
                </div>
                <div class="row no-gutter">
                    <div class="col-lg-4 md-mb-30">
                        <div class="service-wrap">
                            <div class="icon-part">
                                <img src="assets/images/services/icons/style11/1.png" alt="">
                            </div>
                            <div class="content-part">
                                <h5 class="title white-color">Available 24/7</h5>
                                <p class="desc white-color mb-0">At vero eos et accusamus etiusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 md-mb-30">
                        <div class="service-wrap">
                            <div class="icon-part">
                                <img src="assets/images/services/icons/style11/2.png" alt="">
                            </div>
                            <div class="content-part">
                                <h5 class="title white-color">Immediate Response</h5>
                                <p class="desc white-color mb-0">At vero eos et accusamus etiusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-wrap">
                            <div class="icon-part">
                                <img src="assets/images/services/icons/style11/3.png" alt="">
                            </div>
                            <div class="content-part">
                                <h5 class="title white-color">Free Case Review</h5>
                                <p class="desc white-color mb-0">At vero eos et accusamus etiusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rs-about" class="rs-about style4 pt-100 pb-100 md-pt-80 md-pb-76 sm-pb-71">
        <div class="container">
            <div class="row y-middle">
                <div class="col-xl-6 col-lg-7 pr-34 lg-pr-15 lg-mb-50">
                    <div class="image-wrap hoverparallax">
                        <img src="assets/images/about/h10-left-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-6 pl-35 pr-54 lg-pr-15 lg-pl-15">
                    <div class="sec-title custom-law">
                        <div class="sub-title law-color">About us</div>
                        
                        <div class="desc">
                            @foreach ($about as $item)
                                @if($item->key=='About Us')
                                    {!!$item->value!!}
                                @endif
                            @endforeach
                        </div>
                        <div class="justice-icon"><img src="assets/images/justice.svg" alt=""></div>
                    </div>
                    <div class="sec-title custom-law">
                        <div class="sub-title law-color">Our Mission</div>
                        <div class="desc">
                            @foreach ($about as $item)
                                @if($item->key=='Mission')
                                    {!!$item->value!!}
                                @endif
                            @endforeach
                        </div>
                        <div class="justice-icon"><img src="assets/images/justice.svg" alt=""></div>
                    </div>
                    <div class="sec-title custom-law">
                        <div class="sub-title law-color">Core Value</div>
                        <div class="desc">
                            @foreach ($about as $item)
                                @if($item->key=='Core Value')
                                    {!!$item->value!!}
                                @endif
                            @endforeach
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div id="rs-services" class="rs-services style12 navy-bg pt-92 pb-100 md-pt-72 md-pb-80">
        <div class="container custom">
            <div class="sec-title text-center mb-50 sm-mb-30">
                <div class="sub-title law-color">Services</div>
                <h2 class="title mb-0 white-color">Consulting Services</h2>
            </div>
            <div class="row no-gutter">
                @foreach($services as $item)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-wrap">
                        <div class="icon-part mb-20">
                            <img src="assets/images/services/icons/style12/1.png" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title"><a href="#">{{$item->service_name}}</a></h4>
                           
                            <div class="btn-part">
                                <a class="readon-arrow" href="{{route("service_detail",$item->id)}}">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </div>
    <div id="rs-whychooseus" class="rs-whychooseus style6 pt-100 pb-100 md-pt-72 md-pb-80">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-5 md-mb-30">
                    <div class="sec-title mb-35">
                        <div class="sub-title law-color">Why Choose Us</div>
                        <h2 class="title mb-20">We Are Awards Winning Company</h2>
                        
                    </div>
                    <div class="content-wrap">
                        @foreach ($chooseUs as $item)
                            
                        
                        <div class="item-part">
                            <div class="icon-part" style="font-size:40px;color:#b1976c;">
                                {!!$item->icon!!}
                            </div>
                            <div class="desc-text">
                                <h4 class="title">{{$item->title}}</h4>
                                <div class="desc">{{$item->description}}</div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                <div class="col-lg-7 pl-60 md-pl-15">
                    <div class="img-part hoverparallax">
                        <img src="assets/images/whychooseus/style6/main.jpg" alt="">
                        <div class="video-btn law text-center mb-50">
                            <a class="popup-videos" href="https://www.youtube.com/watch?v=YLN1Argi7ik">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rs-casestudies" class="rs-casestudies style2">
        <div class="top-part navy-bg pt-92 pb-200 md-pt-72">
            <div class="container">
                <div class="sec-title text-center pb-52 sm-pb-32">
                    <div class="sub-title law-color">Projects</div>
                    <h2 class="title mb-0 white-color">Recent Case Studies</h2>
                </div>
            </div>
        </div>
        <div class="bottom-part mt--200 pb-92 md-pb-50">
            <div class="container">
                <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3" data-md-device-nav="false" data-md-device-dots="true" data-doteach="true">
                    @foreach ($projects as $item)
                    <div class="portfolio-item">
                        <div class="img-part">
                            <img src="{{asset("storage/$item->thumbnail")}}" alt="{{$item->project_name}}">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="{{route("service_detail",$item->service_id)}}">{{$item->service_name}}</a>
                            <h4 class="title"><a href="{{route("project_detail",$item->id)}}">{{$item->project_name}}</a></h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="rs-testimonial bg22 style8 pt-95 md-pt-75 md-mb--50">
        <div class="container">
            <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-lg-device="1" data-md-device-nav="false" data-md-device-dots="true">
                @foreach ($testimonials as $item)
                    
                
                <div class="content-wrap mb-29">
                    <div class="icon-part">
                        <img src="assets/images/quote3.png" alt="">
                    </div>
                    <div class="desc">
                        {{$item->quote}}
                    </div>
                    <div class="posted-by">
                        <div class="avatar">
                            <img src="{{asset("storage/$item->profile")}}" alt="">
                        </div>
                        <h3 class="name">{{$item->witnens}}</h3>
                        <span class="designation">{{$item->company_name.' '.$item->position}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="rs-partner modify pt-15">
            <div class="container">
                <div class="partner-wrap">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4"  data-lg-device="4" data-md-device-nav="false" data-md-device-dots="false">
                        @foreach ($clients as $item)
                            
                        
                        <div class="partner-item">
                            <a href="#"><img src="{{asset("storage/$item->logo")}}" alt="{{$item->company_name}}"></a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rs-team" class="rs-team slider1 modify2 pb-92 md-pb-30">
        <div class="top-part navy-bg pt-170 md-pt-148">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title law-color">Our Expert Teams</div>
                    <div class="desc text-white">
                        @foreach ($about as $item)
                            @if($item->key=='Our Teams')
                            {!!$item->value!!}
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-part">
            <div class="container custom-for-sl">
                <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="3" data-margin="15" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3" data-md-device-nav="false" data-md-device-dots="true" data-doteach="true">
                    @foreach($teams as $item)
                    <div class="team-wrap">
                        <div class="team-image">
                            <img src="{{asset("storage/$item->profile")}}" alt="Team Image">
                        </div>
                        <div class="text-bottom">
                            <h4 class="person-name"><a href="{{route('team_detail',$item->id)}}">{{$item->name}}</a></h4>
                            <span class="designation">{{$item->position}}</span>
                            <div class="social-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div id="rs-contact" class="rs-free-consultation style1 navy-bg">
        <div class="row no-gutter">
            <div class="col-lg-6">
                <div class="image-part"></div>
            </div>
            <div class="col-lg-6">
                <div class="content-part">
                    <div class="title-part mb-55 md-mb-35">
                        <div class="top-part">
                            <img src="{{asset("assets/images/consultation/phone-call.png")}}" alt="">
                            <div class="title white-color">CALL US 24/7</div>
                        </div>
                        <div class="bottom-part">
                            <h2 class="number mb-21 xs-mb-11">
                                @foreach ($contact as $item)
                                    @if($item->key=='Phone')
                                    <a href="tel:{{$item->value}}">{{$item->value}}</a>
                                    @endif
                                @endforeach
                                
                            </h2>
                            <span>Or</span>
                            <h2 class="title white-color mb-0 mt-15 xs-mt-8">Schedule Free Consultation</h2>
                        </div>
                    </div>
                    <form class="form-part" method="post" action="{{route('storeContact')}}">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="E-mail" required>
                            </div>
                           
                            <div class="col-12">
                                <textarea placeholder="Your Message Here"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="rs-blog" class="rs-blog style1 modify pt-95 pb-92 md-pt-75 md-pb-50 sm-pb-80">
        <div class="container">
            <div class="row y-middle mb-54 md-mb-40 sm-mb-50">
                <div class="col-md-6 sm-mb-20">
                    <div class="sec-title">
                        <span class="sub-title law-color">LATEST NEWS</span>
                        <h2 class="title mb-0">Read Latest Updates</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="btn-part text-right sm-text-left">
                        <a class="readon" href="/latest">View Updates</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container custom-for-sl">
            <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="3" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3" data-md-device-nav="false" data-md-device-dots="true" data-doteach="true">
                @foreach ($blogs as $item)
                    
                
                <div class="blog-wrap">
                    <div class="img-part">
                        <img src="{{asset("storage/$item->thumbnail")}}" alt="{{$item->title}}">
                        <div class="fly-btn">
                            <a href="{{route('latest_detail',$item->id)}}"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="content-part">
                        <a class="categories" href="{{route('latest_by_category',$item->category_id)}}">{{$item->category}}</a>
                        <h3 class="title"><a href="{{route('latest_detail',$item->id)}}">{{$item->title}}</a></h3>
                        <p class="desc">{!!\Illuminate\Support\Str::limit($item->content,80,' ...')!!}</p>
                        <div class="blog-meta">
                            <div class="date">
                                <i class="fa fa-clock-o"></i> {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('Y-m-d')}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div> 

@endsection