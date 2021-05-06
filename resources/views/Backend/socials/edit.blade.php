@extends('Backend.layouts.app')

@section('content')

@section('title','Edit Social')

@section('icon-title','fas fa-share-alt')

<div class="container">

    <div class="row">

        <div class="col-md-8 offset-md-2 card">

            <form action="{{route('updateSocial',$socials->id)}}" method="post" enctype="multipart/form-data" class="m-md-5">

                @csrf

                    <div class="form-group">

                        <label>Social Name</label>

                        <input type="text" name="social_name" class="form-control" value="{{$socials->name}}">

                    </div>

                    

                    <div class="form-group">

                        <label>Icon</label>

                        <input type="file" name="icon" class="form-control">

                    </div>
                    
                    <div class="form-group">

                    <label>Link</label>

                    <input type="text" name="link" class="form-control" value="{{$socials->link}}">

                    </div>
                    <input type="submit" value="Update" class="btn btn-success float-right">

                </form>

        </div>

    </div>



</div>

   

@endsection

