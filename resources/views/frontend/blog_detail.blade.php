@extends('frontend.layout.app')







@section('content')



@section('title', 'Event Detail')




@if(Session::has('message'))

	<script type="text/javascript">

		$(document).ready(function(){

			setTimeout($(".alert-success").hide(),3000);

		});

	</script>

	<div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('message') !!}</em></div>

@endif

<!-- start blog-single-content -->
<!-- Main content Start -->
<div class="main-content">
	@include('frontend.include.banner_rotator')

	<!-- Blog Section Start -->
	<div class="rs-blog inner single pt-100 pb-100 md-pt-80 md-pb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="blog-part">
						<div class="blog-img">
							<a href="{{route('latest_detail',$blogs->id)}}"><img src="{{asset("storage/$blogs->thumbnail")}}" alt="{{$blogs->title}}"></a>
						</div>
						<div class="article-content shadow mb-60">
							<h3>
								{{$blogs->title}}
							</h3>
							<ul class="blog-meta mb-22">
								<li><i class="fa fa-calendar-check-o"></i> {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $blogs->created_at)->format('Y-m-d')}}</li>
								<li><i class="fa fa-user-o"></i> {{$blogs->name}}</li>
								<li><i class="fa fa-book"></i> <a href="#">{{$blogs->category}}</a></li>
								
							</ul>
							{!!$blogs->content!!}
						</div>

						<div class="bs-contact-form pt-45">
							<h3 class="title">Leave a Reply</h3>
							<p>Your email address will not be published. Required fields are marked *</p>
							<div id="form-messages"></div>
							<form id="contact-form" method="post" action="{{route("comment")}}">
								@csrf

					<input type="hidden" name="blog_id" value="{{$blogs->id}}">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-field">
											<label>Name *</label>
											<input type="text" id="name" name="name" required="">
										</div>                              
									</div>
									<div class="col-lg-6">
										<div class="form-field">
											<label>Email *</label>
											<input type="email" id="email" name="email" required="">
										</div>                              
									</div>
									<div class="col-lg-12">
										<div class="form-field mb-30">
											<label>Comment</label>
											<textarea rows="7" id="message" name="content"></textarea>
										</div>
										<div class="form-button mt-30">
											<button type="submit" class="readon radius">Post Comment</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
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
		</div>
	</div>
	<!-- Blog Section End -->
</div> 
<!-- Main content End -->


























@endsection