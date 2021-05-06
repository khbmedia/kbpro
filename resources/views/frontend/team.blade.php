@extends('frontend.layout.app')

@section('title','Our Team')

@section('content')

<!-- Main content Start -->
<div class="main-content">
    
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-3">
        <div class="container">
            <div class="content-part text-center pt-160 pb-160">
                <h1 class="breadcrumbs-title white-color mb-0">Our Team</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->
    <!-- Team Section Start -->
    <div class="rs-team grid2 pt-100 pb-70 md-pt-80 md-pb-50">
        <div class="container">
            <div class="row">
                @foreach ($teams as $item)
                <div class="col-lg-4 col-sm-6 mb-30">
                    <div class="team-wrap">
                        <div class="team-img">
                            <a href="{{route('team_detail',$item->id)}}"><img src="{{asset("storage/$item->profile")}}" alt=""></a> 
                            <div class="team-social">
                                <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
             
                            </div>
                        </div>
                        <div class="team-item-text">
                            <div class="team-details">
                                <h3 class="team-name"><a href="{{route('team_detail',$item->id)}}">{{$item->name}}</a></h3>
                                <span class="team-title">{{$item->position}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row page-pagination-row">

                <div class="col col-xs-12">

                    <div class="page-pagination">

                        {{$teams->links()}}

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Team Section End -->
</div> 
<!-- Main content End -->


@endsection