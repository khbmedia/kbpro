<section class="featured section-padding">
    <div class="container">
        <div class="row content">
            @foreach ($services as $item)
            <div class="col col-lg-4 col-xs-6">
                <div class="grid">
                    <div class="img-holder">
                    <img src='{{asset("storage/$item->thumbnail")}}' alt class="img img-responsive">
                    </div>
                    <div class="details">
                    <h3>{{$item->service_name}}</h3>
                      {!!$item->description!!}  
                </div>
                </div>
            </div>
            @endforeach
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>