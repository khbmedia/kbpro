@extends('Backend.layouts.app')

@section('content')

@section('title','List Testimonial')

@section('icon-title','fas fa-eye')

<div class="container">
<a href="{{route('createTestimonial')}}"><button class="btn btn-success float-right mb-md-3">Add New</button></a>
<div class="col-md-12 card">
<div class="row">

<div class="col-md-6 offset-md-6 mt-md-3 mb-md-3">

    <form class="float-right" action="{{route('searchTestimonial')}}" method="get">

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

        <th>Profile</th>

        <th>Witnens</th>

        <th>Company Name</th>

        <th>Quote</th>

        <th>Action</th>

    </thead>

    <tbody>

        @foreach($testimonials as $item)

        <tr>

            <td>{{$item->id}}</td>

        <td><img src='{{asset("storage/$item->profile")}}' width="60" alt=""></td>

            <td>{{$item->witnens}}</td>

            <td>{{$item->company_name}}</td>

            <td>{{$item->quote}}</td>

            <td>

            <a href="{{route('deleteTestimonial',$item->id)}}"><button class="btn btn-danger btn-sm">Delete</button></a>

            <a href="{{route('editTestimonial',$item->id)}}"><button class="btn btn-warning btn-sm">Edit</button></a>

            </td>

        </tr>

        @endforeach

        

    </tbody>

</table>

<nav>

    <ul class="pagination float-right">

        <li class="page-item">{{$testimonials->links()}}</li>

    </ul>

</nav>

</div>
</div>

    

    

</div>



    

@endsection