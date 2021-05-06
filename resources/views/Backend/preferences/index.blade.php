@extends('Backend.layouts.app')

@section('content')

@section('title','List Preferences')

@section('icon-title','fab fa-preferencestack')



   

        

<div class="container">
<a href="{{route('createPreference')}}" title="Add Preference"><button class="btn btn-success rounded float-right mb-md-3">Add New</button></a>
<div class="col-md-12 card">
<div class="row">

    

<div class="col-md-6 offset-md-6 mt-md-3 mb-md-3">

    <form class="float-right" action="{{route('searchPreference')}}" method="get">

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

        <th>Icon</th>

        <th>Key</th>

        <th>Value</th>
        
        <th>Type</th>

        <th>Action</th>

    </thead>

    <tbody>

        @foreach($preferences as $item)

        <tr>
            <td>{{$item->id}}</td>
            <td>{!!$item->icon!!}</td>
            <td>{{$item->key}}</td>
            <td>{!!$item->value!!}</td>
            <td>{{$item->type}}</td>
            <td>
                <a href="{{route('deletePreference',$item->id)}}"><button class="btn btn-danger btn-sm">Delete</button></a>
                <a href="{{route('editPreference',$item->id)}}"><button class="btn btn-warning btn-sm">Edit</button></a>
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

                <li class="page-item">{{$preferences->links()}}</li>

            </ul>

        </nav>

    </div>

</div>
</div>

</div>



    

@endsection
