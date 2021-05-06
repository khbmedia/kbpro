@extends('Backend.layouts.app')



@section('content')

@section('title','Dashboard')

<div class="container">

    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$users}}</h3>

                        <p>Users Amount</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{route('listUser')}}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$blogs}}</h3>

                        <p>Latest News</p>
                    </div>
                    <div class="icon">
                        <i class="fab fa-blogger"></i>
                    </div>
                    <a href="{{route('listBlog')}}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{$projects}}</h3>

                        <p>Project Amount</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <a href="{{route('listProject')}}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$clients}}</h3>

                        <p>Client Amount</p>
                    </div>
                    <div class="icon">
                        <i class="fab fa-intercom"></i>
                    </div>
                    <a href="{{route('listClient')}}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
    </div>
    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">People Talk About Us</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="testimonial" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Profile</th>
                      <th>Witnens</th>
                      <th>Quote</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($testimonials as $item)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td><img src='{{asset("storage/$item->profile")}}' width="80" alt="{{$item->witnens}}"></td>
                      <td>{{$item->witnens}}</td>
                      <td>{{$item->quote}}</td>
                    </tr>
                    @endforeach
                    
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
        </div>
        
    
</div>



@endsection
@section('customScript')
<script>
    $(function () {
      $("#testimonial").DataTable();
      
    });
  </script>
@endsection