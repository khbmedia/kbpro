@extends('frontend.layout.app')

@section('content')

@section('title','Legal')

@include('frontend.include.header_2')

<!-- BANNER ROTATOR -->

@include('frontend.include.banner_rotator')
<section class="about-company-s2 section-padding">

    <div class="container">

        <div class="row">
            <div class="section-title row">

                <div class="col col-xs-12">

                    <h2>Privacy Policy</h2>

                </div>

            </div> <!-- end section-title -->



            <div class="row">

                <div class="col col-xs-12 about-company-s2-slider-wrapper">

                    @foreach ($about as $item)

                        @if($item->key=='Privacy Policy')

                            {!!$item->value!!}

                        @endif

                    @endforeach

                </div>

            </div>
        </div>
    </div>
</section>

@endsection