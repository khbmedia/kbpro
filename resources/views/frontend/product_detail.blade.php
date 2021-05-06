@extends('frontend.layout.app')
@section('content') 
@section('title', 'Product Detail')

@section('content')

@include('frontend.include.banner_rotator')



<div id="blog-area" class="blog-with-sidebar-area blog-single-area">

    <div class="container">

        <div class="row" style="margin:50px auto;">

        <div class="col-xs-12 col-md-8">
					<div class="post-item detail">
						<div class="image-wrap">
							<div class="meta">
								<div class="date"><i class="fa fa-calendar"></i>{{$product->created_at}}</div>
							
							</div>
							<img src="/storage/{{$product->thumbnail}}" class="img-responsive" alt="">
							
						</div>
						<h3 class="post-title">{{$product->product_name}}</h3>
						{!!$product->description!!}
					</div>
				
				</div>

            <!--Start sidebar Wrapper-->

            <div class="col-xs-12 col-md-4">
				<div class="widget recent-post">
					<h4 class="widget-heading">Latest Product</h4>
					<div class="widget-wrap">
					@foreach($last_product as $item)
						<div class="media">
							<div class="media-left">
								<a href="{{route('product_detail',$item->id)}}">
								  <img class="media-object" src="/storage/{{$item->thumbnail}}" alt="...">
								</a>
							</div>
							<div class="media-body">
								<p><a href="{{route('product_detail',$item->id)}}" title="">{{$item->product_name}}</a></p>

							</div>
						</div>
						
					@endforeach
					</div>
				</div>
				
				
				
				
			</div>
            <!--End Sidebar Wrapper-->  

        </div>

    </div>

</div>

@endsection