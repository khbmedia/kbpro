@extends('Backend.layouts.app')

@section('content')

@section('title','List Frequentlys')

@section('icon-title','fab fa-frequentlystack')



   

        

<div class="container">
<a href="{{route('createFrequently')}}" title="Add Frequently"><button class="btn btn-success rounded float-right mb-md-3">Add New</button></a>
<div class="col-md-12 card">
<div class="row">

    

<div class="col-md-6 offset-md-6 mt-md-3 mb-md-3">

    <form class="float-right" action="{{route('searchFrequently')}}" method="get">

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

        <th>Thumbnail</th>

        <th>Question</th>
        <th>Description</th>

        <th>Action</th>

    </thead>

    <tbody>

        @foreach($frequentlys as $item)

        <tr>

            <td>{{$item->id}}</td>

        <td><img src='{{asset("storage/$item->photo")}}' width="60" alt="{{$item->question}}"></td>

            <td>{{$item->question}}</td>
        <td>{!!$item->description!!}</td>
            <td>

            <a href="{{route('deleteFrequently',$item->id)}}"><button class="btn btn-danger btn-sm">Delete</button></a>

            <a href="{{route('editFrequently',$item->id)}}"><button class="btn btn-warning btn-sm">Edit</button></a>

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

                <li class="page-item">{{$frequentlys->links()}}</li>

            </ul>

        </nav>

    </div>

</div>
</div>

</div>



    

@endsection
