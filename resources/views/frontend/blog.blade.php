@extends('frontend.layout.app')

@section('content')

@section('title','Events')


<!-- Main content Start -->
<div class="main-content">
    @include('frontend.include.banner_rotator')

    <!-- Blog Section  Start -->
    <div class="rs-blog inner pt-100 pb-100 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($blogs as $item)
                    <div class="blog-wrap shadow mb-70 xs-mb-50">
                        <div class="image-part">
                            <a href="#"><img src="{{asset("storage/$item->thumbnail")}}" alt=""></a>
                        </div>
                        <div class="content-part">
                            <h3 class="title mb-10"><a href="{{route('latest_detail',$item->id)}}">{{$item->title}}</a></h3>
                            <ul class="blog-meta mb-22">
                                <li><i class="fa fa-calendar-check-o"></i>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('Y-m-d')}}</li>
                                <li><i class="fa fa-user-o"></i>{{$item->name}}</li>
                                <li><i class="fa fa-book"></i> <a href="#">{{$item->category}}</a></li>
                            </ul>
                            <p class="desc mb-20">{!!\Illuminate\Support\Str::limit($item->content,80,'')!!}</p>
                            <div class="btn-part">
                                <a class="readon-arrow" href="{{route('latest_detail',$item->id)}}">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="col-lg-4 md-mb-50 pl-35 lg-pl-15 md-order-first">
					<div id="sticky-sidebar" class="blog-sidebar">
						

						<div class="sidebar-popular-post sidebar-grid shadow mb-50">
							<div class="sidebar-title">
							   <h3 class="title mb-20">Recent Post</h3>
							</div>
							@foreach($recent_new as $item)
							<div class="single-post mb-20">
								<div class="post-image">
									<a href="{{route('latest_detail',$item->id)}}"><img src="{{asset("storage/$item->thumbnail")}}" alt="post image"></a>
								</div>
								<div class="post-desc">
									<div class="post-title">
										<h5 class="margin-0"><a href="{{route('latest_detail',$item->id)}}">{{$item->title}}</a></h5>
									</div>
									<ul>
										<li><i class="fa fa-calendar"></i>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('Y-m-d')}}</li>
									</ul>
								</div>
							</div>
							@endforeach
						</div>

						<div class="sidebar-categories sidebar-grid shadow">
							<div class="sidebar-title">
							   <h3 class="title mb-20">Categories</h3>
							</div>
							<ul>   
								@foreach($categories as $item)

								<li><a href="{{route('latest_by_category',$item->id)}}">{{$item->category}}</a></li>

								@endforeach                                 
								
							</ul>
						</div>
					</div>
				</div>
            </div>
            
            <div id="sticky-end"></div>
            <div class="row page-pagination-wrapper">

                <div class="col col-xs-12">

                    <div class="page-pagination">

                        {{$blogs->links()}}

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Blog Section  End -->
</div> 
<!-- Main content End -->


@endsection