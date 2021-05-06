@extends('Backend.layouts.app')
@section('content')
@section('title','Create Category')
@section('icon-title','fas fa-chart-pie')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 card">
            <form action="{{route('storeCategory')}}" method="post" enctype="multipart/form-data" class="m-md-5">
                @csrf
                    <div class="form-group">
                        <label>Category</label>
                    <input type="text" name="category" class="form-control" value="{{old('category')}}">
                    </div>
                    <input type="submit" value="Save" class="btn btn-success float-right">
                </form>
        </div>
    </div>

</div>
   
@endsection
