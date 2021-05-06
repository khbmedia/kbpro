<footer id="rs-footer" class="rs-footer">
    <div class="container">
        <div class="footer-newsletter">
            <div class="row y-middle">
                <div class="col-md-6 sm-mb-26">
                    <h2 class="title white-color mb-0">Newsletter Subscribe</h2>
                </div>
                <div class="col-md-6 text-right">
                    <form class="newsletter-form">
                        <input type="email" name="email" placeholder="Your email address" required="">
                        <button type="submit"><i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-content pt-30 md-pb-64 sm-pt-48">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 footer-widget md-mb-39">
                    <div class="about-widget pr-15 text-white">
                        <div class="logo-part">
                            <a href="/"><img src="{{asset("assets/images/logo-light.svg")}}" alt="Footer Logo"></a>
                        </div>
                        <p class="desc">
                            @foreach ($about as $item)
                                @if ($item->key=='About Us')
                                    {!!$item->value!!}
                                @endif
                            @endforeach
                        </p>
                       
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 md-mb-32 footer-widget">
                    <h4 class="widget-title">Contact Info</h4>
                    <ul class="address-widget pr-40">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">
                                @foreach ($contact as $item)
                                    @if ($item->key=='Address')
                                        <p>{{$item->value}}</p>
                                    @endif
                                    
                                @endforeach
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                @foreach ($contact as $item)
                                    @if ($item->key=='Phone')
                                        <a href="tel:{{$item->value}}">{{$item->value}}</a>
                                    @endif
                                    
                                @endforeach
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                @foreach ($contact as $item)
                                    @if ($item->key=='Email')
                                        
                                        <a href="mailto:{{$item->value}}">{{$item->value}}</a>
                                    @endif
                                    
                                @endforeach
                                
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row y-middle">
                <div class="col-lg-6 col-md-8 sm-mb-21">
                    <div class="copyright">
                        <p>© Copyright 2020 KH Pro. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 text-right sm-text-center">
                    <ul class="footer-social">
                        @foreach ($social as $item)
                            <li><a href="{{$item->value}}">{!!$item->icon!!}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>