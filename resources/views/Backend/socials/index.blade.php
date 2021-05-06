@extends('Backend.layouts.app')

@section('content')

@section('title','List Social')

@section('icon-title','fas fa-share-alt')



   

        

<div class="container">
<a href="{{route('createSocial')}}" title="Add Social"><button class="btn btn-success rounded float-right mb-md-3">Add New</button></a>
<div class="col-md-12 card">
<div class="row">

    

<div class="col-md-6 offset-md-6 mt-md-3 mb-md-3">

    <form class="float-right" action="{{route('searchSocial')}}" method="get">

        <div class="form-inline">

            <input type="text" name="search" class="form-control">

            <input type="submit" class="btn btn-success btn-sm" value="Search">

        </div>

    </form>

</div>

</div>

<div class="row">

<table class="table table-bordered">

    <thead>

        <th>ID</th>

        <th>Social Name</th>

        <th>Icon</th>

        <th>Action</th>

    </thead>

    <tbody>

        @foreach($socials as $item)

        <tr>

            <td>{{$item->id}}</td>


            <td>{{$item->name}}</td>
        <td><img src="/storage/{{$item->icon}}" alt="{{$item->name}}" width="35"></td>
            <td>

            <a href="{{route('deleteSocial',$item->id)}}"><button class="btn btn-danger btn-sm">Delete</button></a>

            <a href="{{route('editSocial',$item->id)}}"><button class="btn btn-warning btn-sm">Edit</button></a>

            </td>

        </tr>

        @endforeach

        

    </tbody>

</table>



</div>



<div class="row">

    <div class="col-md-6 offset-md-6 float-right">

        <nav>

            <ul class="pagination">

                <li class="page-item">{{$socials->links()}}</li>

            </ul>

        </nav>

    </div>

</div>
</div>

</div>



    

@endsection
