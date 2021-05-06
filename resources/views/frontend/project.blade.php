@extends('frontend.layout.app')

	@section('content')

    @section('title','Portfolios')
<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-6">
        <div class="container">
            <div class="content-part text-center pt-160 pb-160">
                <h1 class="breadcrumbs-title white-color mb-0">Portfolios</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Portfolio Section Start -->
    <div id="rs-portfolio" class="rs-portfolio inner pt-100 pb-70 md-pt-80 md-pb-50">
        <div class="container">
            <div class="row">
                @foreach ($projects as $item)
                    
                
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="portfolio-item">
                        <div class="img-part">
                            <a class="search" href="{{route("project_detail",$item->id)}}"><i class="fa fa-search"></i></a>
                            <img src="{{asset("storage/$item->thumbnail")}}" alt="{{$item->project_name}}">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="#">{{$item->service_name}}</a>
                            <h4 class="title"><a href="{{route("project_detail",$item->id)}}">{{$item->project_name}}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Portfolio Section End -->
</div> 
<!-- Main content End -->
@endsection