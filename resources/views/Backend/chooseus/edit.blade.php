@extends('Backend.layouts.app')
@section('content')
@section('title','Edit Choose Us')
@section('icon-title','fas fa-user-tag')
<div class="container">
<div class="row">
    <div class="col-md-8 offset-md-2 card">
        <form action="{{route('updateChooseUs',$choose_us->id)}}" method="post" enctype="multipart/form-data" class="m-md-5">
            @csrf
            <div class="form-group">
                <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{$choose_us->title}}">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" id="" cols="30" rows="5" class="form-control">{{$choose_us->description}}</textarea>
            </div>
            <div class="form-group">
                <label>Icon</label>&nbsp;<span><a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Font Awesome 4.6.3</a></span>

                <input type="text" name="icon" class="form-control" value="{{$choose_us->icon}}" placeholder='<i class="fa fa-users"></i>'>
            </div>
                <input type="submit" value="Update" class="btn btn-success float-right">
            </form>
    </div>
</div>
</div>
   
@endsection
