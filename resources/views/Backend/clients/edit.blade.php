@extends('Backend.layouts.app')
@section('content')
@section('title','Edit Client')
@section('icon-title','fab fa-intercom')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 card">
            <form action="{{route('updateClient',$clients->id)}}" method="post" enctype="multipart/form-data" class="m-md-5">
                @csrf
                    <div class="form-group">
                        <label>Company Name</label>
                    <input type="text" name="company_name" class="form-control" value="{{$clients->company_name}}">
                    </div>
                <input type="hidden" name="old_image" value="{{$clients->logo}}">
                    <div class="form-group">
                        <label>Logo</label>
                    <input type="file" name="logo" class="form-control">
                    </div>
                    
                    <input type="submit" value="Update" class="btn btn-success float-right">
                </form>
        </div>
    </div>

</div>
   
@endsection
