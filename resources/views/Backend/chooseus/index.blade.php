@extends('Backend.layouts.app')
@section('content')
@section('title','List Choose Us')
@section('icon-title','fas fa-user-tag')

<div class="container card">
<div class="row">
<div class="container">
<a href="{{route('createChooseUs')}}">
    <button class="btn btn-success float-right mb-md-3">Add New</button>
</a>
</div>
    <div class="col-md-6 offset-md-6 mt-md-3 mb-md-3">
        <form class="float-right" action="{{route('searchChooseUs')}}" method="get">
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
            <th>Icons</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($choose_us as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{!!$item->icon!!}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->description}}</td>
                <td>
                <a href="{{route('deleteChooseUs',$item->id)}}"><button class="btn btn-danger btn-sm">Delete</button></a>
                <a href="{{route('editChooseUs',$item->id)}}"><button class="btn btn-warning btn-sm">Edit</button></a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    <nav>
        <ul class="pagination float-right">
            <li class="page-item">{{$choose_us->links()}}</li>
        </ul>
    </nav>
</div>
    
    
</div>

    
@endsection