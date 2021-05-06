<section class="team section-padding">

    <div class="container">

        <div class="row section-title">

            <div class="col col-md-8 col-md-offset-2">

                <h2>Our People</h2>

                <p>S&P Consulting has a dynamic team specialized in Auditing, Taxation, Accounting, Management and Capacity building. We strive to provide genuine results to our clients to tackle all the problems in their business. We are ready to work with all level of organization and bring the best out of them.</p>

            </div>

        </div> <!-- end section-title -->



        <div class="row content">

            <div class="col col-xs-12">

                <div class="team-slider team-grids">

                    @foreach($teams as $item )

                    <div class="grid">

                        <div class="img-holder">

                        <img src='{{asset("storage/$item->profile")}}' class="img-responsive" alt>

                        </div>

                        
                        <div class="details">

                            <div class="member-info">

                            <h3>{{$item->name}}</h3>

                                <ul >
                                    <div class="team-description">{!!Str::limit($item->description, 100, '')!!}
                                    </div>
                    
                                    <a href="{{route('team_detail',$item->id)}}" class="btn btn-warning btn-sm">
                                        View Detail
                                    </a>
                                </ul>

                            </div>

                            <div class="member-post">

                            <span>{{$item->position}}</span>

                            </div>

                        </div>
                        

                    </div>

                    @endforeach

                </div>

            </div>

        </div> <!-- end row -->

    </div> <!-- end container -->

</section>