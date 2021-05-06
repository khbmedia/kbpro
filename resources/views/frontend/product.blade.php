@extends('frontend.layout.app')
@section('content') 
@section('title', 'Product')
@include('frontend.include.banner_rotator')



    <div class="container">    
        <div class="row" style="margin: 50px auto;">
            @foreach($product as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-img-top" style="height:170px;background-image:url(/storage/{{$item->thumbnail}});background-size:cover;"></div>
                        <div class="card-body">
                            <h5 class="card-title">{{str_limit($item->product_name, 28)}}</h5>
                            <p class="card-text" style="min-height: 80px;padding-top:10px;">{{str_limit($item->description, 100)}}</p>
                            <a href='{{route("product_detail", $item->id)}}' class="btn btn-primary btn-sm btn-block">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        
                <div class="row">
                    <div class="col-md-12"> 
                        <ul class="pagination text-center">
                           {{$product->links()}}
                        </ul>
                    </div> 
                </div>
                <!--End post pagination-->
        </div>
    </div>

@endsection