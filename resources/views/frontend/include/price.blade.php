<section class="section-padding">

    <div class="container">

        <div class="row section-title">
            <div class="col col-md-8 col-md-offset-2">
                <h2>Special Offer</h2>
                
            </div>
        </div>
       



        <div class="row pricing-grids">

            @foreach ($prices as $item)

                

            

            <div class="col col-md-4 col-sm-6">

                <div class="grid">

                    <div class="pricing-header">

                        <span class="icon">

                            {!!$item->icon!!}

                        </span>

                    <h3><span>$</span>{{$item->price}}</h3>

                    <span>{{$item->title}}</span>

                    </div>

                    <div class="pricing-details">

                        {!!$item->description!!}

                        {{-- <a href="#" class="btn"><span>Get plan</span></a> --}}

                    </div>

                </div>

            </div>

            @endforeach

        </div> <!-- end row -->

    </div> <!-- end container -->

</section>

@section('customCss')

<style>

    .icon i.fa{

        font-size: 60px;

        color:#f39c12;

    }

</style>

@endsection