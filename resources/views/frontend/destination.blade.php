@extends('frontend.layout.app')
@section('content')
@section('title','Destinations')
@include('frontend.include.header_2')
@include('frontend.include.banner_rotator')

<section class="destination-grid-layout">
    <div class="container">
        <div class="row">
        @foreach($destinations as $item)
            <div class="col-lg-4 col-md-6">
            <a href="{{route('destination_detail',$item->id)}}" class="top-desti__item">
                    <img src='{{asset("storage/$item->thumbnail")}}' alt="{{$item->destination}}">
                    <div class="top-desti__ammout">
                        <span><i class="fa fa-map-marker"></i>{{$item->destination}}</span>
                        <!-- <span>{{$item->destination}}</span> -->
                    </div>
                </a>
            </div>
        @endforeach 
        </div> 
        
        <!-- pagination -->
        <div class="wander-pagination__pagination">
    {{$destinations->links()}}
        </div>   
    </div>
 
</section>
@endsection