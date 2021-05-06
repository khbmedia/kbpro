@extends('Backend.layouts.app')
@section('content')
@section('title','Create Role')
@section('icon-title','fas fa-user-tag')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 card">
            <form action="{{route('storeRole')}}" method="post" enctype="multipart/form-data" class="m-md-5">
                @csrf
                    <div class="form-group">
                        <label>Role</label>
                    <input type="text" name="role" class="form-control" value="{{old('role')}}">
                    </div>
                    <input type="submit" value="Save" class="btn btn-success">
                </form>
        </div>
    </div>

</div>
   
@endsection
