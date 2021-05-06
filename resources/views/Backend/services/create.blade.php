@extends('Backend.layouts.app')

@section('content')

@section('title','Create Service')

@section('icon-title','fab fa-servicestack')

<div class="container">

    <div class="row">

        <div class="col-md-8 offset-md-2 card">

            <form action="{{route('storeService')}}" method="post" enctype="multipart/form-data" class="m-md-5">

                @csrf

                    <div class="form-group">

                        <label>Service Name</label>

                    <input type="text" name="service_name" class="form-control" value="{{old('service_name')}}">

                    </div>

                    <div class="form-group">

                        <label>Description</label>

                        <textarea id="description" name="description" class="form-control">{{old('description')}}</textarea>


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
    CKEDITOR.replace('description', options);
</script>
@endsection

