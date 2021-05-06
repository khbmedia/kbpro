@extends('Backend.layouts.app')

@section('content')

@section('title','List Travel Type')

@section('icon-title','fas fa-chart-pie')

<div class="container">
<a href="{{route('createTravelType')}}"><button class="btn btn-success float-right mb-md-3">Add New</button></a>
<div class="col-md-12 card">
<div class="row">

<div class="col-md-6 offset-md-6 mt-md-3 mb-md-3">

    <form class="float-right" action="{{route('searchTravelType')}}" method="get">

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

        <th>TravelType</th>

        <th>Action</th>

    </thead>

    <tbody>

        @foreach($TravelType as $item)

        <tr>

            <td>{{$item->id}}</td>

            <td>{{$item->type}}</td>

            <td>

            <a href="{{route('deleteTravelType',$item->id)}}"><button class="btn btn-danger btn-sm">Delete</button></a>

            <a href="{{route('editTravelType',$item->id)}}"><button class="btn btn-warning btn-sm">Edit</button></a>

            </td>

        </tr>

        @endforeach

        

    </tbody>

</table>



</div>



<div class="row">

    <div class="col-md-6 offset-md-6 float-right">

        <nav>

            <ul class="pagination">

                <li class="page-item">{{$TravelType->links()}}</li>

            </ul>

        </nav>

    </div>

</div>

</div>
</div>



    

@endsection