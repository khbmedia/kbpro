@extends('Backend.layouts.app')
@section('content')
@section('title','Create Testimonial')
@section('icon-title','fas fa-eye')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 card">
            <form action="{{route('storeTestimonial')}}" method="post" enctype="multipart/form-data" class="m-md-5">
                @csrf
                    <div class="form-group">
                        <label>Witnens</label>
                        <input type="text" name="witnens" class="form-control" value="{{old('witnens')}}">
                    </div>
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" name="company_name" class="form-control" value="{{old('company_name')}}">
                    </div>
                    <div class="form-group">
                        <label>Position</label>
                        <input type="text" name="position" class="form-control" value="{{old('position')}}">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" value="{{old('address')}}">
                    </div>
                    <div class="form-group">
                        <label>Quote</label>
                        <input type="text" name="quote" class="form-control" value="{{old('quote')}}">
                    </div>
                    <div class="form-group">
                        <label>Profile</label>
                        <input type="file" name="profile" class="form-control" value="{{old('profile')}}">
                    </div>
                    <input type="submit" value="Save" class="btn btn-success">
                </form>
        </div>
    </div>

</div>
   
@endsection
