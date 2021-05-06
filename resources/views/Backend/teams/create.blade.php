@extends('Backend.layouts.app')

@section('content')

@section('title','Create Team')

@section('icon-title','fas fa-user-tag')

<div class="container">

    <div class="row">

        <div class="col-md-8 offset-md-2 card">

            <form action="{{route('storeTeam')}}" method="post" enctype="multipart/form-data" class="m-md-5">

                @csrf

                    <div class="form-group">

                        <label>Name</label>

                    <input type="text" name="name" class="form-control" value="{{old('name')}}">

                    </div>

                    <div class="form-group">

                        <label>Position</label>

                    <input type="text" name="position" class="form-control" value="{{old('position')}}">

                    </div>
                    <div class="form-group">

                        <label>Backgroun of Work</label>

                        <textarea id="background" name="background" class="form-control">{!! old('background') !!}</textarea>

                    </div>

                    <div class="form-group">

                        <label>Profile</label>

                        <input type="file" name="profile" class="form-control">

                    </div>

                    <input type="submit" value="Save" class="btn btn-success">

                </form>

        </div>

    </div>



</div>

   
@section('customScript')



<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

<script>

    var options = {

        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',

        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',

        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',

        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='

    };

    CKEDITOR.replace('background', options);

</script>

@endsection
@endsection


