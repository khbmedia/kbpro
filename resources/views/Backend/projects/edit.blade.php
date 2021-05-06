@extends('Backend.layouts.app')
@section('content')
@section('title','Edit Project')
@section('icon-title','fas fa-project-diagram')
{{-- @dd($services) --}}
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 card">
            <form action="{{route('updateProject',$projects->id)}}" method="post" enctype="multipart/form-data" class="m-md-5">
                @csrf
                    <div class="form-group">
                        <label>Project Name</label>
                    <input type="text" name="project_name" class="form-control" value="{{$projects->project_name}}">
                    </div>
                    <div class="form-group">
                        <label>Project Type</label>
                        <select name="service_id" class="form-control">
                            @foreach ($services as $item)
                                @if ($projects->service_id==$item->id)
                                    <option selected value="{{$item->id}}">{{$item->service_name}}</option> 
                                @else
                                    <option value="{{$item->id}}">{{$item->service_name}}</option> 
                                @endif
                               
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Project Info</label>
                    <textarea name="project_info" id="content" cols="30" class="form-control" rows="5">{!!$projects->project_info!!}</textarea>
                    </div>
                    
                    <input type="hidden" name="old_image" value="{{$projects->thumbnail}}">
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
