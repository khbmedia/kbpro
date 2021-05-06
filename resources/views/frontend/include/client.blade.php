


<section class="partner section-padding">
    <h2 class="section-title">Our Client & Partner</h2>
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="partner-slider">
                    @foreach ($client as $item)

                    <div class="grid col-md-2">

                    <img src='{{asset("storage/$item->logo")}}' alt>

                    </div>

                @endforeach
                    
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>