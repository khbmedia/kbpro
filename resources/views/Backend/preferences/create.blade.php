@extends('Backend.layouts.app')

@section('content')

@section('title','Create Preference')

@section('icon-title','fab fa-servicestack')

<div class="container">

    <div class="row">

        <div class="col-md-8 offset-md-2 card">

            <form action="{{route('storePreference')}}" method="post" enctype="multipart/form-data" class="m-md-5">

                @csrf

                    <div class="form-group">

                        <label>Key</label>

                    <input type="text" name="key" class="form-control" value="{{old('key')}}">

                    </div>
                    <div class="form-group">

                        <label>Type</label>

                    
                    <select name="type" class="form-control">
                        <option value="social">Social</option>
                        <option value="contact">Contact</option>
                        <option value="about">About</option>
                    </select>

                    </div>

                    <div class="form-group">

                        <label>Value</label>

                        <textarea id="value" name="value" class="form-control">{{old('value')}}</textarea>


                    </div>

                    <div class="form-group">

                        <label>Icon</label>&nbsp;<span><a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Font Awesome 4.6.3</a></span>

                        <input type="text" name="icon" class="form-control" placeholder='<i class="fa fa-users"></i>'>
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
    CKEDITOR.replace('value', options);
</script>
@endsection

