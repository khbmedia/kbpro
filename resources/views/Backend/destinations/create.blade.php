@extends('Backend.layouts.app')

@section('content')

@section('title','Create Destination')

@section('icon-title','fas fa-maps')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">

    <div class="row">

        <div class="col-md-8 offset-md-2 card">

            <form action="{{route('storeDestination')}}" method="post" enctype="multipart/form-data" class="m-md-5">

                @csrf

                    <div class="form-group">

                        <label>Destination</label>

                    <input type="text" name="destination" class="form-control" value="{{old('product_name')}}">

                    </div>

                    <div class="form-group">

                        <label>Description</label>

                        <textarea id="content" name="description" class="form-control" cols="30" rows="5">{{old('description')}}</textarea>

                    </div>

                    <div class="form-group">

                        <label>Thumbnail</label>

                        <input type="file" name="thumbnail" class="form-control">

                    </div>
                    

                    <input type="submit" value="Save" class="btn btn-success float-right">

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
