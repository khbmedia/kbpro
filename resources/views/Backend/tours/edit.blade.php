@extends('Backend.layouts.app')

@section('content')

@section('title','Edit Tour')

@section('icon-title','fas fa-shopping-bag')

<div class="container">

    <div class="row">

        <div class="col-md-8 offset-md-2 card">

            <form action="{{route('updateTour')}}" method="post" enctype="multipart/form-data" class="m-md-5">

                @csrf
                <div class="form-group">

                    <label>Tour Code</label>

                <input type="text" name="code" class="form-control" value="{{$tours->code}}">

                </div>
                    <div class="form-group">

                        <label>Tour Destination</label>

                    <input type="text" name="location" class="form-control" value="{{$tours->location}}">

                    </div>

                    <div class="form-group">

                        <label>Country</label>

                        <select name="des_id" class="form-control">
                            @foreach ($destinations as $item)
                        <option @if($item->id==$tours->des_id) selected @endif value="{{$item->id}}">{{$item->destination}}</option>
                            @endforeach
                        
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="tour type">Travel Type</label>
                        <select name="type_id" id="" class="form-control">
                            @foreach ($TravelType as $item)
                                <option @if($item->id==$tours->type_id) selected @endif value="{{$item->id}}">{{$item->type}}</option>
                            @endforeach
                            
                        </select>
                    </div>

                    <div class="form-group">

                        <label>Amount Day</label>

                        <input type="number" name="amount_day" class="form-control" value="{{$tours->amount_day}}">

                    </div>
                    <div class="form-group">

                        <label>Amount Night</label>

                        <input type="number" name="amount_night" class="form-control" value="{{$tours->amount_night}}">

                    </div>
                    <div class="form-group">
                        <label>Video</label>
                        <input type="file" name="video" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" name="thumbnail" class="form-control">
                    </div>
                   <div class="form-group">
                       <label for="gallery">Gallery</label>
                       <input type="file" name="gallery" class="form-control" multiple>
                   </div>
                    <input type="submit" value="Update" class="btn btn-success float-right">

                </form>

        </div>

    </div>



</div>

   

@endsection

