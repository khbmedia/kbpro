<div class="content-wrapper">
  <div class="content-header" style="background:#22293a">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 float-sm-left" style="color:#C09F5D;"><i class="@yield('icon-title')"></i>@yield('title')</h1>
          <a href="{{route('logouts')}}"><button class="btn float-sm-right" style="background:#C09F5D;border-color:#C09F5D;color:#fff;"><i
                class="fas fa-sign-out-alt"></i></button></a>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="row">
    <div class="container">
      <div class="col-sm-12">
        <ol class="breadcrumb float-sm-left ">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active">@yield('title')</li>
        </ol>
      </div><!-- /.col -->
    </div>
  </div>