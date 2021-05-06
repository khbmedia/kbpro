@extends('frontend.layout.app')

@section('content')

@section('title','Contact')
@if(Session::has('message'))
    <div class="alert {{ Session::get('alert-class', 'alert-success') }}" style="margin:0">
        <span class="closebtn" onclick="this.parentElement.style.display='none';" style="float:right;">&times;</span> 
        {{ Session::get('message') }}
      </div>
@endif
<div class="main-content">
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-10">
        <div class="container">
            <div class="content-part text-center">
                <h1 class="breadcrumbs-title white-color mb-0">Contact</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Contact Section Start -->
    <div id="rs-contact" class="rs-contact inner pt-100 md-pt-80">
        <div class="container">
            <div class="content-info-part mb-60">
                <div class="row gutter-16">
                    <div class="col-lg-4 md-mb-30">
                        <div class="info-item">
                            <div class="icon-part">
                                <i class="fa fa-at"></i>
                            </div>
                            <div class="content-part">
                                <h4 class="title">Phone Number</h4>
                                
                                @foreach ($contact as $item)
                                    @if ($item->key=='Phone')
                                        <a href="tel:+088589-8745">{{$item->value}}</a>
                                    @endif
                                    
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 md-mb-30">
                        <div class="info-item">
                            <div class="icon-part">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="content-part">
                                <h4 class="title">Email Address</h4>
                                @foreach ($contact as $item)
                                @if ($item->key=='Email')
                                    
                                    <a href="mailto:{{$item->value}}">{{$item->value}}</a>
                                @endif
                                
                            @endforeach
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item">
                            <div class="icon-part">
                                <i class="fa fa-map-o"></i>
                            </div>
                            <div class="content-part">
                                <h4 class="title">Office Address</h4>
                                @foreach ($contact as $item)
                                @if ($item->key=='Address')
                                    <p>{{$item->value}}</p>
                                @endif
                                
                            @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form-part">
                <div class="row md-col-padding mb-100">
                    <div class="col-md-5 custom1 pr-0">
                        <div class="img-part"></div>
                    </div>
                    <div class="col-md-7 custom2 pl-0">
                        <div id="form-messages"></div>
                        <form id="contact-form" method="post" action="{{route('storeContact')}}">
                            <div class="sec-title mb-53 md-mb-42">
                                <div class="sub-title white-color">Let's Talk</div>
                                <h2 class="title white-color mb-0">Get In Touch</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="mail" placeholder="E-mail" required="">
                                </div>
                               
                                <div class="col-md-12">
                                    <textarea name="content" placeholder="Your Message Here" required=""></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="readon modify">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
    <!-- Contact Section End -->
</div> 


@endsection

