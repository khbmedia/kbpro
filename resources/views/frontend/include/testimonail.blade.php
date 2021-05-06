<section class="testimonials testimonials-style2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-10 col-md-offset-1">
                <div class="testimonials-slider-style2">
                    @foreach ($testimonials as $item)
                    <div class="box">
                        <div class="client-pic">
                            <img src={{asset("storage/$item->profile")}} alt class="img img-responsive">
                        </div>
                        <div class="details">
                            <p>{{$item->quote}}</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        <h4>{{$item->witnens}}</h4>
                        </div>
                    </div>
                     @endforeach
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>