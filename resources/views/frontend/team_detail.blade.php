@extends('frontend.layout.app')

@section('title',$team->name)

@section('content')
<div class="main-content">
    
    @include('frontend.include.banner_rotator')
    <!-- Team Section Start -->
    <div class="rs-team grid2 pt-100 pb-70 md-pt-80 md-pb-50">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-md-8 offset-lg-2 offset-md-2">
                    <img src='{{asset("storage/$team->profile")}}' width="100%" alt="$team->name" style="padding-bottom:30px;">
                        <div class="col col-md-12">
        
                            <div class="section-title">
        
                            <h2>{{$team->position}}</h2>
        
                            </div>
        
                        </div>
                        <div class="col-md-12">
                            {!!$team->description!!}
                        </div>
                    </div>
            </div>
            
        </div>
    </div>
    <!-- Team Section End -->
</div> 
<!-- Main content End -->



@endsection
    