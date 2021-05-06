@extends('Backend.layouts.app')

@section('content')

@section('title','List Slide')

@section('icon-title','fas fa-share-alt')



   

        

<div class="container">
<a href="{{route('createSlide')}}" title="Add Slide"><button class="btn btn-success rounded float-right mb-md-3">Add New</button></a>
<div class="col-md-12 card">
<div class="row">

    

<div class="col-md-6 offset-md-6 mt-md-3 mb-md-3">

    <form class="float-right" action="{{route('searchSlide')}}" method="get">

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
        <th>Title</th>
        <th>Image</th>
        <th>Action</th>

    </thead>

    <tbody>

        @foreach($slides as $item)

        <tr>

            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
        <td><img src="/storage/{{$item->image}}"  width="35"></td>
            <td>

            <a href="{{route('deleteSlide',$item->id)}}"><button class="btn btn-danger btn-sm">Delete</button></a>

            <a href="{{route('editSlide',$item->id)}}"><button class="btn btn-warning btn-sm">Edit</button></a>

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

                <li class="page-item">{{$slides->links()}}</li>

            </ul>

        </nav>

    </div>

</div>
</div>

</div>



    

@endsection
