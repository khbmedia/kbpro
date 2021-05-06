@extends('Backend.layouts.app')



@section('content')



@section('title','About Us')



@section('icon-title','fab fa-preferencestack')



<div class="container">



    <div class="row">



        <div class="col-md-8 offset-md-2 card">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <form action="{{route('updatePreferenceCompany',$about->first()->type)}}" method="post" enctype="multipart/form-data" class="m-md-5">



                @csrf

                <div id="main">

                    @foreach ($about as $item)

                    

                

                <div class="form-group ">



                <label>{{$item->key}}</label>



                <textarea name="{{$item->key}}" id="description-{{$item->id}}" class="text-area-form"> {!!$item->value!!}</textarea>



                </div>

               @endforeach

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

    var element=document.getElementById("main").querySelectorAll(".text-area-form");



    var options = {

        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',

        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',

        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',

        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='

    };

    

    for(let a=0;a<element.length;a++){

        CKEDITOR.replace(element[a]['id'], options);

    }

</script>

@endsection