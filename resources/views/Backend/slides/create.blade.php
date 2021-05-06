@extends('Backend.layouts.app')

@section('content')

@section('title','Create Slide')

@section('icon-title','fab fa-slideshare')

<div class="container">

    <div class="row">

        <div class="col-md-8 offset-md-2 card">

            <form action="{{route('storeSlide')}}" method="post" enctype="multipart/form-data" class="m-md-5">

                @csrf

                   
                    
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">

                        <label>Image</label>

                        <input type="file" name="image" class="form-control">
                    </div>
                    <input type="text" name="link" class="form-control">
                    <input type="submit" value="Save" class="btn btn-success float-right">

                </form>

        </div>

    </div>



</div>

   

@endsection

