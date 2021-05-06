@extends('frontend.layout.app')
@section('content')
@section('title','About Us')
@if(Session::has('message'))
    <div class="alert {{ Session::get('alert-class', 'alert-success') }}" style="margin:0">
        <span class="closebtn" onclick="this.parentElement.style.display='none';" style="float:right;">&times;</span> 
        {{ Session::get('message') }}
      </div>
@endif
<div class="main-content">
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-1">
        <div class="container">
            <div class="content-part text-center">
                <h1 class="breadcrumbs-title white-color mb-0">About Us</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

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

    <div id="rs-team" class="rs-team slider1 modify2 pb-92 md-pb-30">
        <div class="top-part navy-bg pt-170 md-pt-148">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title law-color">Our Expert Teams</div>
                    <div class="desc text-white">KB Pro Teams consists of professionals and experts of all fields which allows a continue improvement to support our customers to achieve their goal. Our customers are our life partners, we are succeeding together.
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

    <div id="rs-contact" class="rs-free-consultation style1 navy-bg mb-100">
        <div class="row no-gutter">
            <div class="col-lg-6">
                <div class="image-part"></div>
            </div>
            <div class="col-lg-6">
                <div class="content-part">
                    <div class="title-part mb-55 md-mb-35">
                        <div class="top-part">
                            <img src="assets/images/consultation/phone-call.png" alt="">
                            <div class="title white-color">CALL US 24/7</div>
                        </div>
                        <div class="bottom-part">
                            <h2 class="number mb-21 xs-mb-11"><a href="tel:+1234569989">(+855) 12 012012</a></h2>
                            <span>Or</span>
                            <h2 class="title white-color mb-0 mt-15 xs-mt-8">Schedule Free Consultation</h2>
                        </div>
                    </div>
                    <form class="form-part">
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
</div> 
@endsection