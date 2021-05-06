<section class="about-us-section about-us-section-style3 section-padding">

    <div class="container">

        <div class="row section-title">

            <h2>About company</h2>

        </div> <!-- end section-title -->



        <div class="row content">

            <div class="col col-md-7">

                <div class="box">

                    <h3>We help you shine and grow as well as tackling your most challenging issues.</h3>

                    @foreach($about as $item)

                        @if($item->key=="About Us")

                        {!!$item->value!!}

                        @endif

                    @endforeach

                </div>

            </div>



            <div class="col col-md-5 about-company-slider-wrapper">

                <div class="about-company-slider">

                    <div>

                        <img src="frontend/images/about-slider/slide1.png" alt>

                    </div>

                    <div>

                        <img src="frontend/images/about-slider/slide2.png" alt>

                    </div>
                    <div>

                        <img src="frontend/images/about-slider/slide3.png" alt>

                    </div>

                </div>

            </div>

        </div> <!-- end row -->

    </div> <!-- end container -->

</section>