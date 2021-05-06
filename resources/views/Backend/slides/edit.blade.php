@extends('Backend.layouts.app')

@section('content')

@section('title','Edit Slide')

@section('icon-title','fab fa-slideshare')

<div class="container">

    <div class="row">

        <div class="col-md-8 offset-md-2 card">

            <form action="{{route('updateSlide',$slides->id)}}" method="post" enctype="multipart/form-data" class="m-md-5">

                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$slides->title}}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" cols="30" rows="10" class="form-control">{{$slides->description}}</textarea>
                </div>
                <div class="form-group">

                    <label>Image</label>

                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="link">Link Button</label>
                <input type="text" name="link" class="form-control" value="{{$slides->link}}">
                </div>
                    

                    <input type="hidden" name="old_image" value="{{$slides->image}}">
                    
                    

                   
                    <input type="submit" value="Update" class="btn btn-success float-right">

                </form>

        </div>

    </div>



</div>

   

@endsection

