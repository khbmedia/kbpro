@extends('Backend.layouts.app')

@section('content')

@section('title','Edit User')

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
            <form action="{{route('updateUser',$users->id)}}" method="post" enctype="multipart/form-data" class="m-md-5">

                @csrf

                <div class="form-group">

                    <label>Name</label>

                    <input type="text" name="name" class="form-control" value="{{$users->name}}">

                </div>

                <div class="form-group">

                    <label>Email</label>

                    <input type="email" name="email" class="form-control" value="{{$users->email}}">

                </div>

                <div class="form-group">

                    <label>New Password</label>

                    <input type="password" name="password" class="form-control">

                </div>

                <div class="form-group">

                    <label>Confirm New Password</label>

                    <input type="password" name="con_password" class="form-control">

                </div>

                <input type="hidden" name="old_image" value="{{$users->profile}}">

                <div class="form-group">

                    <label>Role</label>

                    <select name="role_id" class="form-control">

                        @foreach($roles as $item)

                        <option @if($item->id==$users->role_id) selected @endif value="{{$item->id}}">{{$item->role}}</option>

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