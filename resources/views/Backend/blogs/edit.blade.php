@extends('Backend.layouts.app')
@section('content')
@section('title','Edit Blogs')
@section('icon-title','fab fa-blogger')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 card">
            <form action="{{route('updateBlog',$blogs->id)}}" method="post" enctype="multipart/form-data" class="m-md-5">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{$blogs->title}}">
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea id="content" name="content" class="form-control">{!! $blogs->content !!}</textarea>
                </div>
                <div class="form-group">
                    <label>Thumbnail</label>
                    <input type="file" name="thumbnail" class="form-control">
                </div>
                <input type="hidden" name="old_image" value="{{$blogs->thumbnail}}">
                <div class="form-group">
                    <label>Category</label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $item)
                        <option @if($item->id==$blogs->category_id) selected @endif value="{{$item->id}}">{{$item->category}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" value="Save" class="btn btn-primary btn-sm">
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
    CKEDITOR.replace('content', options);
</script>
@endsection
@endsection