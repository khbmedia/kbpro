@extends('Backend.layouts.app')
@section('content')
@section('title','Edit Category')
@section('icon-title','fas fa-chart-pie')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 card">
            <form action="{{route('updateCategory',$categories->id)}}" method="post" enctype="multipart/form-data" class="m-md-5">
                @csrf
                    <div class="form-group">
                        <label>Category</label>
                    <input type="text" name="category" class="form-control" value="{{$categories->category}}">
                    </div>
                    <input type="submit" value="Update" class="btn btn-success float-right">
                </form>
        </div>
    </div>

</div>
   
@endsection
