@extends('Backend.layouts.app')

@section('content')

@section('title','Social Network')

@section('icon-title','fab fa-preferencestack')

<div class="container">

    <div class="row">

        <div class="col-md-8 offset-md-2 card">

            <form action="{{route('updatePreferenceCompany','social')}}" method="post" enctype="multipart/form-data" class="m-md-5">

                @csrf
                @foreach ($social as $item)
                    
                
                <div class="form-group">

                <label>{{$item->key}}</label>

                <input type="text" name="{{$item->key}}" class="form-control" value="{{strip_tags($item->value)}}">

                </div>
               @endforeach
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
    CKEDITOR.replace('description', options);
</script>
@endsection