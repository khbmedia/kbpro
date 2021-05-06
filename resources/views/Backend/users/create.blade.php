@extends('Backend.layouts.app')

@section('content')

@section('title','User')

@section('icon-title','fas fa-users')

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

            <form action="{{route('storeUser')}}" method="post" enctype="multipart/form-data" class="m-md-5">

                @csrf

                <div class="form-group">

                    <label>Name</label>

                    <input type="text" name="name" class="form-control" value="{{old('name')}}">

                </div>

                <div class="form-group">

                    <label>Email</label>

                    <input type="email" name="email" class="form-control" value="{{old('email')}}">

                </div>

                <div class="form-group">

                    <label>Password</label>

                    <input type="password" name="password" class="form-control">

                </div>

                <div class="form-group">

                    <label>Confirm Password</label>

                    <input type="password" name="con_password" class="form-control">

                </div>

                <div class="form-group">

                    <label>Role</label>

                    <select name="role_id" class="form-control">

                        @foreach($roles as $item)

                        <option value="{{$item->id}}">{{$item->role}}</option>

                        @endforeach

                    </select>

                </div>

                <div class="form-group">

                    <label>Profile</label>

                    <input type="file" name="profile" class="form-control">

                </div>

                <input type="submit" value="Save" class="btn btn-success float-right">

            </form>

        </div>

    </div>

</div>



@endsection