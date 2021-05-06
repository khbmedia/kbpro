@extends('Backend.layouts.app')

@section('content')

@section('title','List Blogs')

@section('icon-title','fab fa-blogger')



<div class="container">
    
<a href="{{route('createBlog')}}"><button class="btn btn-success float-right mb-md-3">Add New</button></a>
    <div class="col-md-12 card">
        
        <div class="row">
            
            <div class="col-md-6 offset-md-6 mt-md-3 mb-md-3">

                <form class="float-right" action="{{route('searchBlog')}}" method="get">

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

                    <th>Thumbnail</th>

                    <th>Title</th>

                    <th>Action</th>

                </thead>

                <tbody>

                    @foreach($blogs as $item)

                    <tr>

                        <td>{{$item->id}}</td>

                    <td><img src="{{asset('storage/'.$item->thumbnail)}}" alt="" width="60px"></td>

                        <td>{{$item->title}}</td>

                        <td>

                        <a href="{{route('deleteBlog',$item->id)}}"><button class="btn btn-danger btn-sm">Delete</button></a>

                        <a href="{{route('editBlog',$item->id)}}"><button class="btn btn-warning btn-sm">Edit</button></a>

                        </td>

                    </tr>

                    @endforeach

                    

                </tbody>

            </table>

            <nav>

                <ul class="pagination float-right">

                    <li class="page-item">{{$blogs->links()}}</li>

                </ul>

            </nav>

        </div>

    </div>

    

</div>

    

@endsection