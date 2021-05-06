<section class="blog-section section-padding">

    <div class="container">

        <div class="row section-title">

            <div class="col col-md-8 col-md-offset-2">

                <h2>Events</h2>

            </div>

        </div> <!-- end section-title -->



        <div class="row blog-section-grids">

            @foreach ($blogs as $item)

            

        <meta property="og:description" content="" />

            

            <div class="col col-md-4 col-xs-6 wow fadeInLeftSlow">

                <div class="grid">

                    <div class="entry-media">

                    <img src='{{asset("storage/$item->thumbnail")}}' alt class="img img-responsive">

                    </div>

                    <div class="entry-title">

                    <h3><a href="{{route('latest_detail',$item->id)}}">{{$item->title}}</a></h3>

                    </div>

                    <div class="entry-meta">

                        <ul>

                            @php

                            

                                $date = date_create($item->created_at);

                                $date_format =date_format($date, 'M-d-Y');

                            @endphp

                            <li><a href="#"><i class="fa fa-clock-o"></i> {{$date_format}}</a></li>

                            

                        </ul>

                    </div>

                    <div class="entry-details">

                        {!!Str::limit($item->content, 200, '')!!}

                        <a href="{{route('latest_detail',$item->id)}}" class="read-more">Read more</a>

                    </div>

                </div>

            </div>

            @endforeach

        </div> <!-- end row -->

    </div> <!-- end container -->

</section>