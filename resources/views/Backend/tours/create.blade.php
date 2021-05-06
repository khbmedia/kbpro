@extends('Backend.layouts.app')

@section('content')

@section('title','Create Tour')

@section('icon-title','fas fa-shopping-bag')

<div class="container">

    <div class="row">

        <div class="col-md-8 offset-md-2 card">

            <form action="{{route('storeTour')}}" method="post" enctype="multipart/form-data" class="m-md-5">

                @csrf
                <div class="form-group">

                    <label>Tour Code</label>

                <input type="text" name="code" class="form-control" value="{{old('code')}}">

                </div>
                    <div class="form-group">

                        <label>Tour Destination</label>

                    <input type="text" name="location" class="form-control" value="{{old('location')}}">

                    </div>

                    <div class="form-group">

                        <label>Country</label>

                        <select name="des_id" class="form-control">
                            @foreach ($destinations as $item)
                            <option value="{{$item->id}}">{{$item->destination}}</option>
                            @endforeach
                        
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="overview">Overview</label>
                        <textarea name="overview" id="overview"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tour type">Travel Type</label>
                        <select name="type_id" id="" class="form-control">
                            @foreach ($TravelType as $item)
                                <option value="{{$item->id}}">{{$item->type}}</option>
                            @endforeach
                            
                        </select>
                    </div>

                    <div class="form-group">

                        <label>Amount Day</label>

                        <input type="number" name="amount_day" class="form-control">

                    </div>
                    <div class="form-group">

                        <label>Amount Night</label>

                        <input type="number" name="amount_night" class="form-control">

                    </div>
                    <div class="form-group">
                        <label>Video</label>
                        <input type="file" name="video" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" name="thumbnail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gallery">Gallery</label>
                        <input type="file" name="gallery[]" class="form-control" multiple>
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
    CKEDITOR.replace('overview', options);
</script>
@endsection
