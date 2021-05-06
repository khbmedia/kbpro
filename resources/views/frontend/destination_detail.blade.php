@extends('frontend.layout.app')



@section('content')

@section('title', 'Destination Detail')
@include('frontend.include.header_2')
@include('frontend.include.banner_rotator')

<section class="tour-item-banner-2">
    <div class="container">
        <h4>Home / Destination / <span> {{$destinations->destination}}</span></h4>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <aside>
                    <div class="blog-single-aside">
                        <div class="blog-single-aside__thumbnail">
                            <img src='{{asset("storage/$destinations->thumbnail")}}'
                                alt="{{$destinations->destination}}" width="100%">
                        </div>
                        <div class="blog-single-aside__time">
                            <span><i class="far fa-calendar-check"></i>
                                {{date('M-d-Y', strtotime($destinations->created_at))}}
                            </span>

                        </div>

                        <div class="blog-single-aside__content">
                            <h3>{{$destinations->destination}}</h3>
                            {!!$destinations->description!!}
                        </div>



                        <!-- section tittle -->
                        <div class="destination-item-aside__relate-tour__tittle">



                            <div class="section-tittle">
                                <h2>Discover</h2>
                                <div class="section-tittle__line-under"></div>
                                <p>{{$destinations->destination}} <span>Tour</span></p>
                            </div>
                        </div>
                        <hr>
                        <div class="@if($tours->count()<3) {{'item-two'}} @else {{'related-tour row'}} @endif">
                            @foreach($tours as $item)
                            <div class="related-tour__item">
                                <a href="{{route('tour_detail',$item->id)}}" class="trending-tour-item">
                                    
                                    <img class="trending-tour-item__thumnail"
                                        src='{{asset("storage/$item->thumbnail")}}' style="height:@if($tours->count()<3) {{'230px'}} @else {{'180px'}} @endif" alt="{{$item->location}}">
                                    <div class="trending-tour-item__info">
                                        <h3 class="trending-tour-item__name">
                                            {{$item->location}}
                                        </h3>
                                        <div class="trending-tour-item__group-infor">
                                            <div class="trending-tour-item__group-infor--left">
                                                
                                                <div class="trending-tour-item__group-infor__lasting"><img
                                                        src="/frontend/assets/images/tours/lasting.png" alt="lasting">{{$item->amount_day}}
                                                    Days / {{$item->amount_night}}
                                                    Nights</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                            

                        </div>


                        <div class="blog-comment">



                            <div class="tour-infomation__content__write-comment">
                                <h5>Leave A Comment</h5>
                                <form action="#">
                                    <div>
                                        <input type="text" name="name" placeholder="Name *"><input type="text"
                                            name="email" placeholder="Email *">
                                    </div>
                                    <textarea name="review" cols="30" rows="8" placeholder="Your review *"></textarea>
                                    <input type="submit" value="SUBMIT">
                                </form>
                            </div>
                        </div>



                    </div>
                </aside>



            </div>

            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="blog-sidebar">




                        <div class="blog-sidebar__widget">
                            <h3>Recent Destination</h3>
                            <div class="recent-post">
                                @foreach($recent_new as $item)
                                <a href="{{route('destination_detail',$item->id)}}" class="recent-post__item">
                                    <img src='{{asset("storage/$item->thumbnail")}}' alt="recent-post">
                                    <div class="recent-post__item__info">
                                        <h5>{{$item->destination}}</h5>
                                        <span>{{date('M d,Y', strtotime($item->created_at))}}</span>
                                    </div>
                                </a>
                                @endforeach

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection