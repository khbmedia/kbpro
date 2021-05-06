@extends('frontend.layout.app')
@section('content')
@section('title','Tours')
@include('frontend.include.header_2')
@include('frontend.include.banner_rotator')


<section class="grid-left-sidebar">
    <div class="container">
        <div class="row">
            
            <div class="col-xl-3 col-lg-4 col-md-5">
    <div class="left-sidebar">
        <div class="left-sidebar__item left-sidebar__item--form">
            <h3>PLAN YOUR TRIP</h3>
        <form class="left-sidebar-form" action="{{route('find_tour')}}" method="post">
            @csrf
                <div class="form__item form__item--select">
                    <label >Destination</label>
                    <div class="custom-select">
                        <select name="des_id">
                            @foreach ($destinations as $item)
                                <option value="{{$item->id}}">{{$item->destination}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>
                <div class="form__item ">
                    <label >Check in</label>
                    <div class="form__item--datepicker">
                        <input type="date" name="start_date">
                    
                    </div>
                </div>
                <div class="form__item">
                    <label >Check out</label>
                    <div class="form__item--datepicker">
                        <input type="date" name="end_date">
                    </div>
                </div>
                <div class="form__item form__item--select">
                    <label >Travel type</label>
                    <div class="custom-select">
                        <select name="type_id">
                            <option value="0">Select destinaion</option>
                            @foreach ($travel_type as $item)
                        <option value="{{$item->id}}">{{$item->type}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
        
                
                <input class="left-sidebar-form__submit" type="submit" value="SEARCH">
            </form>
        </div>

       
    </div>
</div>

<script src="/frontend/assets/scripts/jquery-3.4.1.js"> </script>
<script src="/frontend/assets/scripts/priceRangeSlider.js"></script>

            
                      
<div class="col-xl-9 col-lg-8 col-md-7">
    

    <div class="row">
        @foreach ($tours as $item)
        <div class="col-lg-6 col-xl-4 col-sm-6 col-md-12">
        <a href="{{route('tour_detail',$item->id)}}" class="trending-tour-item">
            <img class="trending-tour-item__thumnail" src='{{asset("storage/$item->thumbnail")}}' style="height:200px;" alt="{{$item->location}}">
                <div class="trending-tour-item__info">
                    <h3 class="trending-tour-item__name">
                        {{$item->location}}
                    </h3>
                    <div class="trending-tour-item__group-infor">
                        <div class="trending-tour-item__group-infor--left">
                            <div class="trending-tour-item__group-infor__lasting"><img src="/frontend/assets/images/tours/lasting.png" alt="lasting"> {{$item->amount_day}} Days / {{$item->amount_night}} Nights</div>
                        </div>

                        
        
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        
        
    </div>

    <!-- pagination -->
    <div class="wander-pagination__pagination">
        {{$tours->links()}}
    </div>
</div>

</div>

        </div>
    </div>
</section>
@endsection