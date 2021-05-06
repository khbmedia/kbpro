@extends('frontend.layout.app')
@section('content')
@section('title', $service->service_name)
<div class="main-content">
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-3">
        <div class="container">
            <div class="content-part text-center pt-160 pb-160">
                <h1 class="breadcrumbs-title white-color mb-0">{{$service->service_name}}</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->
    <!-- Services Section Start -->
    <div id="rs-services" class="rs-services single pt-100 pb-100 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pr-40 md-pr-15 md-mb-50">
                    <img class="mb-39" src="{{asset("storage/$service->thumbnail")}}" alt="{{$service->service_name}}" style="width:100%">

                    <h2>{{$service->service_name}}</h2>

                    {!!$service->description!!}
                    
                </div>
                <div class="col-lg-4">
                    <ul class="page-nav-vertical mb-50">
                        @foreach ($services as $item)
                            <li class="{{$item->id==$service->id?'active':''}}"><a href="{{route("service_detail",$item->id)}}">{{$item->service_name}}</a></li>
                        @endforeach
                        
                        
                    </ul>

                    <div class="addd mb-50">
                        <div class="contact-icon"> <i class="fa fa-phone"></i></div>
                        <h2 class="title white-color">Have any Questions? <br> Call us Today!</h2>
                        <div class="contact white">
                            <a href="tel:123222-8888">(123) 222-8888</a>
                        </div>
                    </div>

                    <div class="brochures">
                        <h3 class="title mb-20">Brochures</h3>
                        <p class="desc mb-30">Cras enim urna, interdum nec por ttitor vitae, sollicitudin eu erosen. Praesent eget mollis nulla sollicitudin.</p>
                        <div class="dual-btn modify">
                            <div class="dual-btn-wrap">
                                <a class="btn-left" href="#"><span>Download</span></a>
                                <span class="connector"> Or </span>
                            </div>
                            <div class="dual-btn-wrap">
                                <a class="btn-right" href="#"><span>Discover</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->
</div> 
@endsection