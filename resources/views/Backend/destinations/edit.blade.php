@extends('Backend.layouts.app')

@section('content')

@section('title','Edit Product')

@section('icon-title','fas fa-maps')

<div class="container">

    <div class="row">

        <div class="col-md-8 offset-md-2 card">

            <form action="{{route('updateDestination',$destinations->id)}}" method="post" enctype="multipart/form-data" class="m-md-5">

                @csrf

                    <div class="form-group">

                        <label>Destination</label>

                    <input type="text" name="destination" class="form-control" value="{{$destinations->destination}}">

                    </div>

                    <div class="form-group">

                        <label>Description</label>

                        <textarea id="content" name="description" class="form-control" cols="30" rows="5">{!!$destinations->description!!}</textarea>

                    </div>

                <input type="hidden" name="old_image" value="{{$destinations->thumbnail}}">
                
                    <div class="form-group">

                        <label>Thumbnail</label>

                        <input type="file" name="thumbnail" class="form-control">

                    </div>
                   
                    <input type="submit" value="Update" class="btn btn-success float-right">

                </form>

        </div>

    </div>



</div>

   

@endsection
@section('customScript')

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace('content', options);
</script>
@endsection