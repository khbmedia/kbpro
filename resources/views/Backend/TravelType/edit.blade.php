@extends('Backend.layouts.app')
@section('content')
@section('title','Edit Travel Type')
@section('icon-title','fas fa-chart-pie')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 card">
            <form action="{{route('updateTravelType',$TravelType->id)}}" method="post" enctype="multipart/form-data" class="m-md-5">
                @csrf
                    <div class="form-group">
                        <label>Travel Type</label>
                    <input type="text" name="type" class="form-control" value="{{$TravelType->type}}">
                    </div>
                    <input type="submit" value="Update" class="btn btn-success float-right">
                </form>
        </div>
    </div>

</div>
   
@endsection
