@extends('Backend.layouts.app')
@section('content')
@section('title','Edit Role')
@section('icon-title','fas fa-user-tag')
<div class="container">
<div class="row">
    <div class="col-md-8 offset-md-2 card">
        <form action="{{route('updateRole',$roles->id)}}" method="post" enctype="multipart/form-data" class="m-md-5">
            @csrf
                <div class="form-group">
                    <label>Role</label>
                <input type="text" name="role" class="form-control" value="{{$roles->role}}">
                </div>
                <input type="submit" value="Update" class="btn btn-success float-right">
            </form>
    </div>
</div>
</div>
   
@endsection
