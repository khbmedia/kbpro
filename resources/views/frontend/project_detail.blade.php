@extends('frontend.layout.app')

	@section('content')

    @section('title',$projects->project_name)
<!-- Main content Start -->

<div class="main-content">
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-7">
        <div class="container">
            <div class="content-part text-center pt-160 pb-160">
                <h1 class="breadcrumbs-title white-color mb-0">{{$projects->project_name}}</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Portfolio Section Start -->
    <div id="rs-portfolio" class="rs-portfolio single pt-100 md-pt-80 pb-100 lg-pb-92 md-pb-72">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pr-45 md-pr-15">
                    <img class="mb-25" src="{{asset("storage/$projects->thumbnail")}}" alt="{{$projects->project_name}}" style="width:100%;">

                    {!!$projects->project_info!!}
                </div>


                
                <div class="col-lg-4 md-mb-50 md-order-first">
                    <div class="project-sidebar">
                        
                        <div class="sidebar-popular-post sidebar-grid shadow mb-50">
                            <h4 class="title">Last Project</h4>

                            @foreach($last_project as $item)
							<div class="single-post mb-20">
								<div class="post-image">
									<a href="{{route('project_detail',$item->id)}}"><img src="{{asset("storage/$item->thumbnail")}}" alt="post image"></a>
								</div>
								<div class="post-desc">
									<div class="post-title">
										<h5 class="margin-0"><a href="{{route('project_detail',$item->id)}}">{{$item->project_name}}</a></h5>
									</div>
									<ul>
										<li><i class="fa fa-calendar"></i>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('Y-m-d')}}</li>
									</ul>
								</div>
							</div>
							@endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Section End -->
</div> 
<!-- Main content End -->
@endsection