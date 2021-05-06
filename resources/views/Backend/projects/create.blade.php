@extends('Backend.layouts.app')
@section('content')
@section('title','Create Project')
@section('icon-title','fas fa-project-diagram')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 card">
            <form action="{{route('storeProject')}}" method="post" enctype="multipart/form-data" class="m-md-5">
                @csrf
                    <div class="form-group">
                        <label>Project Name</label>
                    <input type="text" name="project_name" class="form-control" value="{{old('project_name')}}">
                    </div>
                    <div class="form-group">
                        <label>Project Type</label>
                        <select name="service_id" class="form-control">
                            @foreach ($services as $item)
                               <option value="{{$item->id}}">{{$item->service_name}}</option> 
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Project Info</label>
                        <textarea name="project_info" id="content" class="form-control" cols="30" rows="5">{{old('project_info')}}</textarea>
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
