@extends('Backend.layouts.app')
@section('content')
@section('title','Teams')
@section('icon-title','fas fa-user-tag')

<div class="container">
    <a href="{{route('createTeam')}}" title="Add Product"><button class="btn btn-success rounded float-right mb-md-3">Add New</button></a>
<div class="col-md-12 card">
    <div class="row">
        <div class="col-md-6 offset-md-6 mt-md-3 mb-md-3">
            <form class="float-right" action="{{route('searchTeam')}}" method="get">
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
                <th>Profile</th>
                <th>Name</th>
                <th>Position</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($teams as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img src='{{asset("storage/$item->profile")}}' width="60" alt="{{$item->name}}"></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->position}}</td>
                    <td>
                    <a href="{{route('deleteTeam',$item->id)}}"><button class="btn btn-danger btn-sm">Delete</button></a>
                    <a href="{{route('editTeam',$item->id)}}"><button class="btn btn-warning btn-sm">Edit</button></a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <nav>
            <ul class="pagination float-right">
                <li class="page-item">{{$teams->links()}}</li>
            </ul>
        </nav>
    </div>


    </div>
</div>

    
@endsection