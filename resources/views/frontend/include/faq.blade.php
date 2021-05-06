<section class="faq section-padding">

    <div class="container-fluid">

        <div class="row">

            <div class="col col-lg-6 left-col">

                {{-- <a href="https://www.youtube.com/embed/opj24KnzrWo?autoplay=1" class="video-btn" data-type="iframe"> --}}



            </div>



            <div class="col col-lg-6 right-col">

                <div class="section-title">

                    <h2>Frequently asked question</h2>

                </div> <!-- end section-title -->

                @foreach ($frequently as $item)

                    

                

            <div class="panel-group" id="accordion-{{$loop->index}}">

                    <div class="panel panel-default">

                        <div class="panel-heading">

                        <a data-toggle="collapse" data-parent="#accordion-{{$loop->index}}" href="#collapseOne-{{$loop->index}}" aria-expanded="true">{{$loop->iteration.". ".$item->question}}<i class="fa fa-angle-down"></i></a>

                        </div>

                        <div id="collapseOne-{{$loop->index}}" class="panel-collapse collapse">

                            <div class="panel-body">

                                <div class="img-holder">

                                <img src='{{asset("storage/$item->photo")}}' width="100%" alt>

                                </div>

                                {!!$item->description!!}

                            </div>

                        </div>

                    </div>

                @endforeach

                    

                </div>

            </div>

        </div> <!-- end row -->

    </div> <!-- end container -->

</section>