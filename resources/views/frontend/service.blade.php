@extends('frontend.layout.app')

	@section('content')

    @section('title','Service')

    {{-- @include('frontend.include.banner_rotator')	 --}}
    
    <div class="main-content">
        <!-- Breadcrumbs Section Start -->
        <div class="rs-breadcrumbs bg-2">
            <div class="container">
                <div class="content-part text-center">
                    <h1 class="breadcrumbs-title white-color mb-0">Services</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs Section End -->

        <!-- Premium Services Section Start -->
        <div id="rs-services" class="rs-services style2 gray-bg2 pt-100 pb-70 md-pt-80 md-pb-50 sm-pt-72">
            <div class="container">
                <div class="sec-title style2 mb-60 md-mb-50 sm-mb-42">
                    <div class="first-half text-right">
                        <div class="sub-title primary">Premium Services</div>
                        <h2 class="title mb-0">Business Services</h2>
                    </div>
                    <div class="last-half">
                        <p class="desc mb-0 pr-50">
                            @foreach ($about as $item)
                                @if($item->key=='About Us')
                                    {!!$item->value!!}
                                @endif
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="row gutter-20">
                    @foreach ($services as $item)
                        
                    
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="service-wrap">
                            <div class="image-part">
                                <img src="{{asset("storage/$item->thumbnail")}}" alt="{{$item->service_name}}">
                            </div>
                            <div class="content-part text-center">
                                <h3 class="title"><a href="{{route("service_detail",$item->id)}}">{{$item->service_name}}</a></h3>
                                {{-- <div class="desc">Busiess servies ipsum dolor sit amet, consectetur adipiscing elit.</div> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Premium Services Section End -->

    </div> 


@endsection

	