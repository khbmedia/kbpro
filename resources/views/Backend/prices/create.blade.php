@extends('Backend.layouts.app')



@section('content')



@section('title','Create Price')



@section('icon-title','fab fa-servicestack')



<div class="container">



    <div class="row">



        <div class="col-md-8 offset-md-2 card">



            <form action="{{route('storePrice')}}" method="post" enctype="multipart/form-data" class="m-md-5">



                @csrf



                    <div class="form-group">



                        <label>Price</label>



                    <input type="text" name="price" class="form-control" value="{{old('price')}}">



                    </div>

                    <div class="form-group">



                        <label>Title</label>



                    <input type="text" name="title" class="form-control" value="{{old('title')}}">



                    </div>



                    <div class="form-group">



                        <label>Description</label>



                        <textarea id="description" name="description" class="form-control">{{old('description')}}</textarea>





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

    CKEDITOR.replace('description', options);

</script>

@endsection



