@extends('Backend.layouts.app')
@section('content')
@section('title','Create Client')
@section('icon-title','fab fa-intercom')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 card">
            <form action="{{route('storeClient')}}" method="post" enctype="multipart/form-data" class="m-md-5">
                @csrf
                    <div class="form-group">
                        <label>Company Name</label>
                    <input type="text" name="company_name" class="form-control" value="{{old('company_name')}}">
                    </div>
                    <div class="form-group">
                        <label>Logo</label>
                    <input type="file" name="logo" class="form-control">
                    </div>
                    
                    <input type="submit" value="Save" class="btn btn-success float-right">
                </form>
        </div>
    </div>

</div>
   
@endsection
