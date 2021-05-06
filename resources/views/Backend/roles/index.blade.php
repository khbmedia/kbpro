@extends('Backend.layouts.app')

@section('content')

@section('title','List Roles')

@section('icon-title','fas fa-user-tag')

<div class="container">
<a href="{{route('createRole')}}"><button class="btn btn-success float-right mb-md-3">Add New</button></a>
<div class="col-md-12 card">
<div class="row">

<div class="col-md-6 offset-md-6 mt-md-3 mb-md-3">

    <form class="float-right" action="{{route('searchRole')}}" method="get">

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

        <th>Role</th>

        <th>Action</th>

    </thead>

    <tbody>

        @foreach($roles as $item)

        <tr>

            <td>{{$item->id}}</td>

            <td>{{$item->role}}</td>

            <td>

            <a href="{{route('deleteRole',$item->id)}}"><button class="btn btn-danger btn-sm">Delete</button></a>

            <a href="{{route('editRole',$item->id)}}"><button class="btn btn-warning btn-sm">Edit</button></a>

            </td>

        </tr>

        @endforeach

        

    </tbody>

</table>

<nav>

    <ul class="pagination float-right">

        <li class="page-item">{{$roles->links()}}</li>

    </ul>

</nav>

</div>
</div>

    

    

</div>



    

@endsection