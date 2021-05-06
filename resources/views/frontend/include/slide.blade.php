<section class="slider-section">
    <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul>
                @foreach ($slides as $item)
                    
                
                @switch($loop->iteration)
                    @case(1)
            <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-delay="10000" data-thumb='{{asset("storage/$item->image")}}'  data-title="{{$item->title}}" >
                        <!-- MAIN IMAGE -->
                    <img src='{{asset("storage/$item->image")}}'  alt="newslide2014_1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
    
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption main-heading customin customout"
                            data-x="25"
                            data-y="210"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1800"
                            data-start="500"
                            data-easing="Power3.easeInOut"
                            data-splitin="chars"
                            data-splitout="chars"
                            data-elementdelay="0.08"
                            data-endelementdelay="0.08"
                            data-end="8000"
                            data-endspeed="500"
                    style="z-index: 2;"> <h1>{{$item->title}}</h1>
                        </div>
                        
    
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption slider-text rs-parallaxlevel-0"
                            data-x="25" 
                            data-y="460"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="2000"
                            data-start="3300"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-end="9000"
                            data-endspeed="2000"
                            data-linktoslide="next"
                            style="z-index: 8;"> {{$item->description}}
                        </div>
    
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption lfb ltt"
                            data-x="25"
                            data-y="570"
                            data-speed="1800"
                            data-start="4500"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-end="11000"
                            data-endspeed="1800"
                            data-endeasing="Power4.easeOut"
                            style="z-index: 3;">
                            <div class="link-button hidden-xs">
                            <a href="{{$item->link}}" class="btn slider-btn">Learn More</a>
                            </div> <!-- link-button -->
                        </div>
                    </li>
                        @break 
                    @default
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-delay="10000" data-thumb='{{asset("storage/$item->image")}}' data-title="{{$item->title}}" >
                        <!-- MAIN IMAGE -->
                        <img src='{{asset("storage/$item->image")}}'  alt="newslide2014_1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
    
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption main-heading customin customout"
                            data-x="25"
                            data-y="210"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1800"
                            data-start="500"
                            data-easing="Power3.easeInOut"
                            data-splitin="chars"
                            data-splitout="chars"
                            data-elementdelay="0.08"
                            data-endelementdelay="0.08"
                            data-end="8000"
                            data-endspeed="500"
                    style="z-index: 2;"> <h1>{{$item->title}}</h1>
                        </div>
                        
    
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption slider-text rs-parallaxlevel-0"
                            data-x="25" 
                            data-y="460"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="2000"
                            data-start="3300"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-end="9000"
                            data-endspeed="2000"
                            data-linktoslide="next"
                            style="z-index: 8;"> {{$item->description}}
                        </div>
    
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption lfb ltt"
                            data-x="25"
                            data-y="570"
                            data-speed="1800"
                            data-start="4500"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-end="11000"
                            data-endspeed="1800"
                            data-endeasing="Power4.easeOut"
                            style="z-index: 3;">
                            <div class="link-button hidden-xs">
                            <a href="{{$item->link}}" class="btn slider-btn">Learn More</a>
                                
                            </div> <!-- link-button -->
                        </div>
                    </li>
                
                    @endswitch
                @endforeach
                
            </ul>
        </div>
    </div>
</section> 