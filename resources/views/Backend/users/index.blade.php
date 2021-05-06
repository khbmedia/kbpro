@extends('Backend.layouts.app')

@section('content')

@section('title','List Users')

@section('icon-title','fas fa-users')

<div class="container">
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
        </div>
    @endif
<a href="{{route('createUser')}}"><button class="btn btn-success float-right mb-md-3">Add New</button></a>
<div class="col-md-12 card">
<div class="row">

<div class="col-md-6 offset-md-6 mt-md-3 mb-md-3">

    <form class="float-right" action="{{route('searchUser')}}" method="get">

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

        <th>Email</th>

        <th>Role</th>

        <th>Action</th>

    </thead>

    <tbody>

        @foreach($users as $item)

        <tr>

            <td>{{$item->id}}</td>

            <td><img src='{{asset("storage/$item->profile")}}' width="60" alt=""></td>

            <td>{{$item->name}}</td>

            <td>{{$item->email}}</td>

            <td>{{$item->role}}</td>

            <td>

            <a href="{{route('deleteUser',$item->id)}}"><button class="btn btn-danger btn-sm">Delete</button></a>

            <a href="{{route('editUser',$item->id)}}"><button class="btn btn-warning btn-sm">Edit</button></a>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

<nav>

    <ul class="pagination float-right">

        <li class="page-item">{{$users->links()}}</li>

    </ul>

</nav>

</div>
</div>

    

    

</div>



    

@endsection