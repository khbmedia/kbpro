@extends('Backend.layouts.app')

@section('content')

@section('title','Create Product')

@section('icon-title','fas fa-shopping-bag')

<div class="container">

    <div class="row">

        <div class="col-md-8 offset-md-2 card">

            <form action="{{route('storeProduct')}}" method="post" enctype="multipart/form-data" class="m-md-5">

                @csrf

                    <div class="form-group">

                        <label>Product Name</label>

                    <input type="text" name="product_name" class="form-control" value="{{old('product_name')}}">

                    </div>

                    <div class="form-group">

                        <label>Description</label>

                        <textarea name="description" class="form-control" cols="30" rows="5">{{old('description')}}</textarea>

                    </div>

                    <div class="form-group">

                        <label>Thumbnail</label>

                        <input type="file" name="thumbnail" class="form-control">

                    </div>
                    <div class="form-group">
                        <label>Attachment File</label>
                        <input type="file" name="attachment" class="form-control">
                    </div>

                    <input type="submit" value="Save" class="btn btn-success float-right">

                </form>

        </div>

    </div>



</div>

   

@endsection

