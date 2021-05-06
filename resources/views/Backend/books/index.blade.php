@extends('Backend.layouts.app')

@section('content')

@section('title','List Booking')

@section('icon-title','fas fa-chart-pie')

<div class="container">
    <a href="{{route('createBooking')}}"><button class="btn btn-success float-right mb-md-3">Add New</button></a>
    <div class="col-md-12 card">
        <div class="row">

            <div class="col-md-6 offset-md-6 mt-md-3 mb-md-3">

                <form class="float-right" action="{{route('searchBooking')}}" method="get">

                    <div class="form-inline">

                        <input type="text" name="search" class="form-control">

                        <input type="submit" class="btn btn-success btn-sm" value="Search">

                    </div>

                </form>

            </div>

        </div>

        <div class="row">

            <table class="table table-bordered">

                <thead>

                    <th>ID</th>
                    <th>Geust Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Tour Code</th>
                    <th>Travel Date</th>
                    <th>Status</th>
                    <th>Action</th>

                </thead>

                <tbody>

                    @foreach($book as $item)

                    <tr>

                        <td>{{$item->id}}</td>

                        <td>{{$item->first_name." ".$item->last_name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->code}}</td>
                        <td>{{$item->travel_date}}</td>
                        <td>@if($item->status==0) Padding @elseif($item->status==1) Confirmed @else Decline @endif</td>
                        <td>

                            <a href="#" data-toggle="modal" data-target="#viewBook-{{$item->id}}"><button
                                    class="btn btn-default btn-sm">
                                    <i class="fa fa-eye"></i>&nbsp;View</button></a>
                            <a href="{{route('update_status_booking',[$item->id,1])}}"><button
                                    class="btn btn-success btn-sm">
                                    <i class="fa fa-check-circle"></i>&nbsp;Accept</button>
                            </a>
                            <a href="{{route('update_status_booking',[$item->id,3])}}"><button
                                    class="btn btn-danger btn-sm">
                                    <i class="fa fa-times"></i>&nbsp;Decline</button></a>

                        </td>
                        

                    </tr>

                    @endforeach

<!-- Modal -->
<div class="modal fade" id="viewBook-{{$item->id}}" data-backdrop="static" data-keyboard="false"
    tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-success" style="text-align:center !important;display:block;">
                <h5 class="modal-title" id="staticBackdropLabel">Booking information</h5>
               
            </div>
            <div class="modal-body">

               <div class="container">
                   
                       
                        <p>Tour Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : {{$item->code}}</p>
                        <p>Geust Name&nbsp;&nbsp;&nbsp; : {{$item->title." ".$item->first_name." ".$item->last_name}}</p>
                        <p>Passport No &nbsp;&nbsp;: {{$item->passport}}</p>
                        <p>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{$item->phone}}</p>
                        <p>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{$item->address}}</p>
                        <p>Hotel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{$item->hotel}}</p>
                        <p>Booking Date&nbsp; : {{$item->created_at}}</p>
                        <p>Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : @if($item->status==0) Padding @elseif($item->status==1) Confirmed @else Decline @endif</p>
                        
                  
               </div>
                        
                        
            </div>
            <div class="modal-footer bg-success">
                <button class="btn btn-default float-right" data-dismiss="modal" aria-label="Close">Close</button>
            </div>

        </div>
    </div>
</div>

                </tbody>

            </table>





            <div class="row">

                <div class="col-md-6 offset-md-6 float-right">

                    <nav>

                        <ul class="pagination">

                            <li class="page-item">{{$book->links()}}</li>

                        </ul>

                    </nav>

                </div>

            </div>

        </div>
    </div>





    @endsection