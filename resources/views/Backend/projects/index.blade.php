@extends('Backend.layouts.app')

@section('content')

@section('title','List Project')

@section('icon-title','fas fa-chart-pie')

<div class="container">
<a href="{{route('createProject')}}"><button class="btn btn-success float-right mb-md-3">Add New</button></a>
<div class="col-md-12 card">
<div class="row">

<div class="col-md-6 offset-md-6 mt-md-3 mb-md-3">

    <form class="float-right" action="{{route('searchProject')}}" method="get">

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

        <th>Project Name</th>

        <th>Action</th>

    </thead>

    <tbody>

        @foreach($projects as $item)

        <tr>

            <td>{{$item->id}}</td>

        <td><img src='{{asset("storage/$item->thumbnail")}}' width="60" alt="{{$item->project_name}}"></td>

            <td>{{$item->project_name}}</td>

            <td>

            <a href="{{route('deleteProject',$item->id)}}"><button class="btn btn-danger btn-sm">Delete</button></a>

            <a href="{{route('editProject',$item->id)}}"><button class="btn btn-warning btn-sm">Edit</button></a>

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

                <li class="page-item">{{$projects->links()}}</li>

            </ul>

        </nav>

    </div>

</div>
</div>

</div>



    

@endsection